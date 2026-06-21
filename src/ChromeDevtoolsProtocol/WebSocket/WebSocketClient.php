<?php
namespace ChromeDevtoolsProtocol\WebSocket;

use Wrench\Client;

/**
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
class WebSocketClient extends Client
{

	/** @var WebSocketClientSocket */
	protected $socket;

	protected function configure(array $options)
	{
		$options = array_merge([
			"socket_class" => WebSocketClientSocket::class,
			"on_data_callback" => null,
			"socket_options" => [],
		], $options);

		parent::configure($options);
	}

	public function setDeadline(?\DateTimeImmutable $deadline)
	{
		$this->socket->setDeadline($deadline);
	}

	public function receive()
	{
		// Forward the receive() call to Client::receive()
		$payloads = parent::receive();
		
		// If the latest payload(s) are received, clear the buffer. We don't need that copy any more.
		if ($payloads)
			$this->received = array();

		// Return the latest received payloads
		return $payloads;
	}
}
