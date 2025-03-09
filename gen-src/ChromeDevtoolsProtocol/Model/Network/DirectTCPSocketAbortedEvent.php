<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired when direct_socket.TCPSocket is aborted.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DirectTCPSocketAbortedEvent implements \JsonSerializable
{
	/** @var string */
	public $identifier;

	/** @var string */
	public $errorMessage;

	/** @var int|float */
	public $timestamp;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->identifier)) {
			$instance->identifier = (string)$data->identifier;
		}
		if (isset($data->errorMessage)) {
			$instance->errorMessage = (string)$data->errorMessage;
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->identifier !== null) {
			$data->identifier = $this->identifier;
		}
		if ($this->errorMessage !== null) {
			$data->errorMessage = $this->errorMessage;
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		return $data;
	}
}
