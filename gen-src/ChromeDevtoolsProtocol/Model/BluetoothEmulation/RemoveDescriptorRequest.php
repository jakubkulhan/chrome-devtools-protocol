<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Request for BluetoothEmulation.removeDescriptor command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoveDescriptorRequest implements \JsonSerializable
{
	/** @var string */
	public $address;

	/** @var string */
	public $serviceId;

	/** @var string */
	public $characteristicId;

	/** @var string */
	public $descriptorId;


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
		if (isset($data->descriptorId)) {
			$instance->descriptorId = (string)$data->descriptorId;
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
		if ($this->descriptorId !== null) {
			$data->descriptorId = $this->descriptorId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return RemoveDescriptorRequestBuilder
	 */
	public static function builder(): RemoveDescriptorRequestBuilder
	{
		return new RemoveDescriptorRequestBuilder();
	}
}
