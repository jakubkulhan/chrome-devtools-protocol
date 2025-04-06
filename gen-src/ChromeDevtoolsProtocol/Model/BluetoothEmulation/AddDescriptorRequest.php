<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Request for BluetoothEmulation.addDescriptor command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddDescriptorRequest implements \JsonSerializable
{
	/** @var string */
	public $characteristicId;

	/** @var string */
	public $descriptorUuid;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->characteristicId)) {
			$instance->characteristicId = (string)$data->characteristicId;
		}
		if (isset($data->descriptorUuid)) {
			$instance->descriptorUuid = (string)$data->descriptorUuid;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->characteristicId !== null) {
			$data->characteristicId = $this->characteristicId;
		}
		if ($this->descriptorUuid !== null) {
			$data->descriptorUuid = $this->descriptorUuid;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return AddDescriptorRequestBuilder
	 */
	public static function builder(): AddDescriptorRequestBuilder
	{
		return new AddDescriptorRequestBuilder();
	}
}
