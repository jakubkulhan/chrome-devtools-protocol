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
	public $serviceId;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->serviceId !== null) {
			$data->serviceId = $this->serviceId;
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
