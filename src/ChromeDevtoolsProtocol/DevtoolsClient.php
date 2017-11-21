<?php
namespace ChromeDevtoolsProtocol;

use ChromeDevtoolsProtocol\Exception\ClientClosedException;
use ChromeDevtoolsProtocol\Exception\LogicException;
use ChromeDevtoolsProtocol\Exception\RuntimeException;
use ChromeDevtoolsProtocol\WebSocket\WebSocketClient;
use Wrench\Client;
use Wrench\Payload\Payload;

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
		$this->wsClient = new WebSocketClient($wsUrl, "http://" . parse_url($wsUrl, PHP_URL_HOST));
		if (!$this->wsClient->connect()) {
			throw new RuntimeException(sprintf("Could not connect to [%s].", $wsUrl));
		}
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

	public function close(): void
	{
		$wsClient = $this->wsClient;
		$this->wsClient = null;
		$wsClient->disconnect();
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

		$this->getWsClient()->setDeadline($ctx->getDeadline());
		$this->getWsClient()->sendData(json_encode($payload));

		for (; ;) {
			$this->getWsClient()->setDeadline($ctx->getDeadline());
			$payloads = $this->getWsClient()->receive();
			foreach ($payloads as $payload) {
				/** @var Payload $payload */
				$message = json_decode($payload->getPayload());

				if (isset($message->id) && $message->id === $messageId) {
					return $message->result ?? new \stdClass();
				} else {
					$this->handleMessage($message);
				}
			}
		}
	}

	/**
	 * @internal
	 */
	public function awaitEvent(ContextInterface $ctx, string $method)
	{
		for (; ;) {
			$this->getWsClient()->setDeadline($ctx->getDeadline());
			foreach ($this->getWsClient()->receive() as $payload) {
				/** @var Payload $payload */
				$message = json_decode($payload->getPayload());

				if (isset($message->method) && $message->method === $method) {
					return $message->params;
				} else {
					$this->handleMessage($message);
				}
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
