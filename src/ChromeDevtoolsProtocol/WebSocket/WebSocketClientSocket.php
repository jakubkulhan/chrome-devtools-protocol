<?php
namespace ChromeDevtoolsProtocol\WebSocket;

use ChromeDevtoolsProtocol\Exception\DeadlineException;
use Wrench\Socket\ClientSocket;

/**
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
class WebSocketClientSocket extends ClientSocket
{

	/**
	 * TODO: fixed bug with non-blocking read, do not overwrite method after upstream merge
	 */
	public function receive($length = self::DEFAULT_RECEIVE_LENGTH)
	{
		$buffer = '';
		$metadata['unread_bytes'] = 0;
		$makeBlockingAfterRead = false;

		try {
			do {
				// feof means socket has been closed
				// also, sometimes in long running processes the system seems to kill the underlying socket
				if (!$this->socket || feof($this->socket)) {
					$this->disconnect();

					return $buffer;
				}

				$result = fread($this->socket, $length);

				if ($makeBlockingAfterRead) {
					stream_set_blocking($this->socket, true);
					$makeBlockingAfterRead = false;
				}

				// fread FALSE means socket has been closed
				if ($result === false) {
					$this->disconnect();

					return $buffer;
				}

				$buffer .= $result;

				// feof means socket has been closed
				if (feof($this->socket)) {
					$this->disconnect();

					return $buffer;
				}

				$continue = false;

				if (strlen($result) == 1) {
					// Workaround Chrome behavior (still needed?)
					$continue = true;
				}

				if (strlen($result) == $length) {
					$continue = true;
				}

				// Continue if more data to be read
				$metadata = stream_get_meta_data($this->socket);

				if ($metadata && isset($metadata['unread_bytes'])) {
					if (!$metadata['unread_bytes']) {
						// stop it, if we read a full message in previous time
						$continue = false;
					} else {
						$continue = true;
						// it makes sense only if unread_bytes less than DEFAULT_RECEIVE_LENGTH
						if ($length > $metadata['unread_bytes']) {
							// http://php.net/manual/en/function.stream-get-meta-data.php
							// 'unread_bytes' don't describes real length correctly.
							//$length = $metadata['unread_bytes'];

							// Socket is a blocking by default. When we do a blocking read from an empty
							// queue it will block and the server will hang. https://bugs.php.net/bug.php?id=1739
							stream_set_blocking($this->socket, false);
							$makeBlockingAfterRead = true;
						}
					}
				}
			} while ($continue);

			return $buffer;

		} finally {
			if ($makeBlockingAfterRead) {
				stream_set_blocking($this->socket, true);
			}
		}
	}

	public function setDeadline(?\DateTimeImmutable $deadline)
	{
		if ($this->socket === null) {
			throw new DeadlineException("Socket closed.");
		}

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
