<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Request for BluetoothEmulation.removeCharacteristic command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoveCharacteristicRequest implements \JsonSerializable
{
	/** @var string */
	public $address;

	/** @var string */
	public $serviceId;

	/** @var string */
	public $characteristicId;


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
		if (isset($data->serviceId)) {
			$instance->serviceId = (string)$data->serviceId;
		}
		if (isset($data->characteristicId)) {
			$instance->characteristicId = (string)$data->characteristicId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->address !== null) {
			$data->address = $this->address;
		}
		if ($this->serviceId !== null) {
			$data->serviceId = $this->serviceId;
		}
		if ($this->characteristicId !== null) {
			$data->characteristicId = $this->characteristicId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return RemoveCharacteristicRequestBuilder
	 */
	public static function builder(): RemoveCharacteristicRequestBuilder
	{
		return new RemoveCharacteristicRequestBuilder();
	}
}
