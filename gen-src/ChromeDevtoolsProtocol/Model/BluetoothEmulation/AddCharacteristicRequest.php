<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Request for BluetoothEmulation.addCharacteristic command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddCharacteristicRequest implements \JsonSerializable
{
	/** @var string */
	public $serviceId;

	/** @var string */
	public $characteristicUuid;

	/** @var CharacteristicProperties */
	public $properties;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->serviceId)) {
			$instance->serviceId = (string)$data->serviceId;
		}
		if (isset($data->characteristicUuid)) {
			$instance->characteristicUuid = (string)$data->characteristicUuid;
		}
		if (isset($data->properties)) {
			$instance->properties = CharacteristicProperties::fromJson($data->properties);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->serviceId !== null) {
			$data->serviceId = $this->serviceId;
		}
		if ($this->characteristicUuid !== null) {
			$data->characteristicUuid = $this->characteristicUuid;
		}
		if ($this->properties !== null) {
			$data->properties = $this->properties->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return AddCharacteristicRequestBuilder
	 */
	public static function builder(): AddCharacteristicRequestBuilder
	{
		return new AddCharacteristicRequestBuilder();
	}
}
