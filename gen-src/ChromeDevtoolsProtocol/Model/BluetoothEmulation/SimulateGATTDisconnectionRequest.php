<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Request for BluetoothEmulation.simulateGATTDisconnection command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SimulateGATTDisconnectionRequest implements \JsonSerializable
{
	/** @var string */
	public $address;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->address)) {
			$instance->address = (string)$data->address;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->address !== null) {
			$data->address = $this->address;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SimulateGATTDisconnectionRequestBuilder
	 */
	public static function builder(): SimulateGATTDisconnectionRequestBuilder
	{
		return new SimulateGATTDisconnectionRequestBuilder();
	}
}
