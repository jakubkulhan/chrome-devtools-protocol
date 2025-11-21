<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Named type Network.DirectUDPSocketJoinedMulticastGroupEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DirectUDPSocketJoinedMulticastGroupEvent implements \JsonSerializable
{
	/** @var string */
	public $identifier;

	/** @var string */
	public $IPAddress;


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
		if (isset($data->IPAddress)) {
			$instance->IPAddress = (string)$data->IPAddress;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->identifier !== null) {
			$data->identifier = $this->identifier;
		}
		if ($this->IPAddress !== null) {
			$data->IPAddress = $this->IPAddress;
		}
		return $data;
	}
}
