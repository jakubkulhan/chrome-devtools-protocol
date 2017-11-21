<?php
namespace ChromeDevtoolsProtocol\WebSocket;

use ChromeDevtoolsProtocol\Exception\DeadlineException;
use Wrench\Socket\ClientSocket;

/**
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
class WebSocketClientSocket extends ClientSocket
{

	public function setDeadline(?\DateTimeImmutable $deadline)
	{
		if ($deadline === null) {
			stream_set_timeout($this->socket, 0);
		} else {
			$timeout = floatval($deadline->format("U.u")) - microtime(true);
			if ($timeout < 0.0) {
				throw new DeadlineException("Socket deadline reached.");
			}
			$seconds = intval($timeout);
			$microseconds = intval(($timeout - $seconds) * 1000000);
			stream_set_timeout($this->socket, $seconds, $microseconds);
		}
	}

}
