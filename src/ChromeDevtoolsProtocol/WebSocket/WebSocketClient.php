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

}
