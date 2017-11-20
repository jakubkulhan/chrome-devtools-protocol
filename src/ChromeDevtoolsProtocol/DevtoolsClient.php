<?php
namespace ChromeDevtoolsProtocol;

use ChromeDevtoolsProtocol\Exception\ClientClosedException;
use ChromeDevtoolsProtocol\Exception\DeadlineException;
use ChromeDevtoolsProtocol\Exception\LogicException;
use ChromeDevtoolsProtocol\Exception\RuntimeException;
use WebSocket\Client;

/**
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
class DevtoolsClient implements DevtoolsClientInterface, InternalClientInterface
{

	use DevtoolsClientTrait;

	/** @var callable[][] */
	private $listeners = [];

	/** @var Client|null */
	private $wsClient;

	/** @var int */
	private $messageId = 0;

	public function __construct(string $wsUrl)
	{
		$this->wsClient = new Client($wsUrl);

		// force connect
		$rm = new \ReflectionMethod(get_class($this->wsClient), "connect");
		$rm->setAccessible(true);
		$rm->invoke($this->wsClient);
	}

	public function __destruct()
	{
		if ($this->wsClient !== null) {
			throw new LogicException(sprintf(
				"You must call [%s::%s] method to release underlying WebSocket connection.",
				__CLASS__,
				"close"
			));
		}
	}

	public function close()
	{
		$wsClient = $this->wsClient;
		$this->wsClient = null;
		$wsClient->close();
	}

	/**
	 * @internal
	 */
	public function executeCommand(ContextInterface $ctx, string $method, $parameters)
	{
		$messageId = ++$this->messageId;

		$payload = new \stdClass();
		$payload->id = $messageId;
		$payload->method = $method;
		$payload->params = $parameters;

		if ($ctx->getDeadline() !== null) {
			$timeout = floatval($ctx->getDeadline()->format("U.u")) - microtime(true);
			if ($timeout < 1) {
				throw new DeadlineException("Context deadline reached.");
			}
			$this->getWsClient()->setTimeout(intval($timeout));
		}
		$this->getWsClient()->send(json_encode($payload));

		for (; ;) {
			if ($ctx->getDeadline() !== null) {
				$timeout = floatval($ctx->getDeadline()->format("U.u")) - microtime(true);
				if ($timeout < 1) {
					throw new DeadlineException("Context deadline reached.");
				}
				$this->getWsClient()->setTimeout(intval($timeout));
			}
			$message = json_decode($this->getWsClient()->receive());

			if (isset($message->id) && $message->id === $messageId) {
				return $message->result ?? new \stdClass();
			} else {
				$this->handleMessage($message);
			}
		}
	}

	/**
	 * @internal
	 */
	public function awaitEvent(ContextInterface $ctx, string $method)
	{
		for (; ;) {
			if ($ctx->getDeadline() !== null) {
				$timeout = floatval($ctx->getDeadline()->format("U.u")) - microtime(true);
				if ($timeout < 1) {
					throw new DeadlineException("Context deadline reached.");
				}
				$this->getWsClient()->setTimeout(intval($timeout));
			}
			$message = json_decode($this->getWsClient()->receive());

			if (isset($message->method) && $message->method === $method) {
				return $message->params;
			} else {
				$this->handleMessage($message);
			}
		}
	}

	private function handleMessage($message)
	{
		if (isset($message->method)) {
			if (isset($this->listeners[$message->method])) {
				foreach ($this->listeners[$message->method] as $callback) {
					$callback($message->params);
				}
			}

		} else {
			throw new RuntimeException(sprintf(
				"Unhandled message: %s",
				json_encode($message, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
			));
		}
	}

	private function getWsClient()
	{
		if ($this->wsClient === null) {
			throw new ClientClosedException("Client has been closed.");
		}

		return $this->wsClient;
	}

	/**
	 * @internal
	 */
	public function addListener(string $method, callable $listener): SubscriptionInterface
	{
		if (!isset($this->listeners[$method])) {
			$this->listeners[$method] = [];
		}

		$this->listeners[$method][] = $listener;

		$callback = function () use ($method, $listener) {
			foreach ($this->listeners[$method] as $k => $candidateListener) {
				if ($candidateListener === $listener) {
					unset($this->listeners[$method][$k]);
					break;
				}
			}

			if (empty($this->listeners[$method])) {
				unset($this->listeners[$method]);
			}
		};

		return new class($callback) implements SubscriptionInterface
		{
			/** @var callable */
			private $callback;

			public function __construct(callable $callable)
			{
				$this->callback = $callable;
			}

			public function cancel(): void
			{
				$callback = $this->callback;
				$callback();
			}
		};
	}

}
