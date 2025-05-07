<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired when direct_socket.UDPSocket connection is opened.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DirectUDPSocketOpenedEvent implements \JsonSerializable
{
	/** @var string */
	public $identifier;

	/** @var string */
	public $localAddr;

	/**
	 * Expected to be unsigned integer.
	 *
	 * @var int
	 */
	public $localPort;

	/** @var int|float */
	public $timestamp;

	/** @var string|null */
	public $remoteAddr;

	/**
	 * Expected to be unsigned integer.
	 *
	 * @var int|null
	 */
	public $remotePort;


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
		if (isset($data->localAddr)) {
			$instance->localAddr = (string)$data->localAddr;
		}
		if (isset($data->localPort)) {
			$instance->localPort = (int)$data->localPort;
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		if (isset($data->remoteAddr)) {
			$instance->remoteAddr = (string)$data->remoteAddr;
		}
		if (isset($data->remotePort)) {
			$instance->remotePort = (int)$data->remotePort;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->identifier !== null) {
			$data->identifier = $this->identifier;
		}
		if ($this->localAddr !== null) {
			$data->localAddr = $this->localAddr;
		}
		if ($this->localPort !== null) {
			$data->localPort = $this->localPort;
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		if ($this->remoteAddr !== null) {
			$data->remoteAddr = $this->remoteAddr;
		}
		if ($this->remotePort !== null) {
			$data->remotePort = $this->remotePort;
		}
		return $data;
	}
}
