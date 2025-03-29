<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Request for BluetoothEmulation.addService command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddServiceRequest implements \JsonSerializable
{
	/** @var string */
	public $address;

	/** @var string */
	public $serviceUuid;


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
		if (isset($data->serviceUuid)) {
			$instance->serviceUuid = (string)$data->serviceUuid;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->address !== null) {
			$data->address = $this->address;
		}
		if ($this->serviceUuid !== null) {
			$data->serviceUuid = $this->serviceUuid;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return AddServiceRequestBuilder
	 */
	public static function builder(): AddServiceRequestBuilder
	{
		return new AddServiceRequestBuilder();
	}
}
