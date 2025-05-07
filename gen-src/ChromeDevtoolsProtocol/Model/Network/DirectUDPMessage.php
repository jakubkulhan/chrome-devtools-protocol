<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Named type Network.DirectUDPMessage.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DirectUDPMessage implements \JsonSerializable
{
	/** @var string */
	public $data;

	/**
	 * Null for connected mode.
	 *
	 * @var string|null
	 */
	public $remoteAddr;

	/**
	 * Null for connected mode. Expected to be unsigned integer.
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
		if (isset($data->data)) {
			$instance->data = (string)$data->data;
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
		if ($this->data !== null) {
			$data->data = $this->data;
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
