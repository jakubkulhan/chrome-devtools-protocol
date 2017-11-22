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

	/** @var object[] */
	private $commandResults = [];

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
			foreach ($this->getWsClient()->receive() as $payload) {
				/** @var Payload $payload */
				$message = json_decode($payload->getPayload());
				$this->handleMessage($message);
			}

			if (isset($this->commandResults[$messageId])) {
				$result = $this->commandResults[$messageId];
				unset($this->commandResults[$messageId]);
				return $result;
			}
		}
	}

	/**
	 * @internal
	 */
	public function awaitEvent(ContextInterface $ctx, string $method)
	{
		for (; ;) {
			$eventMessage = null;

			$this->getWsClient()->setDeadline($ctx->getDeadline());
			foreach ($this->getWsClient()->receive() as $payload) {
				/** @var Payload $payload */
				$message = json_decode($payload->getPayload());

				$nextEventMessage = $this->handleMessage($message, $method);

				if ($eventMessage === null && $nextEventMessage !== null) {
					$eventMessage = $nextEventMessage;
				}
			}

			if ($eventMessage !== null) {
				return $eventMessage->params;
			}
		}
	}

	private function handleMessage($message, ?string $returnIfEventMethod = null)
	{
		if (isset($message->method)) {
			if (isset($this->listeners[$message->method])) {
				foreach ($this->listeners[$message->method] as $callback) {
					$callback($message->params);
				}
			}

			if ($returnIfEventMethod !== null && $message->method === $returnIfEventMethod) {
				return $message;
			}

		} else if (isset($message->id)) {
			$this->commandResults[$message->id] = $message->result ?? new \stdClass();

		} else {
			throw new RuntimeException(sprintf(
				"Unhandled message: %s",
				json_encode($message, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
			));
		}

		return null;
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
