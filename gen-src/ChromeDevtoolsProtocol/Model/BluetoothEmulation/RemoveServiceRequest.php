<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Request for BluetoothEmulation.removeService command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoveServiceRequest implements \JsonSerializable
{
	/** @var string */
	public $address;

	/** @var string */
	public $id;


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
		if (isset($data->id)) {
			$instance->id = (string)$data->id;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->address !== null) {
			$data->address = $this->address;
		}
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return RemoveServiceRequestBuilder
	 */
	public static function builder(): RemoveServiceRequestBuilder
	{
		return new RemoveServiceRequestBuilder();
	}
}
