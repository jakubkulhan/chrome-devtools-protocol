<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Request for BluetoothEmulation.simulateGATTOperationResponse command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SimulateGATTOperationResponseRequest implements \JsonSerializable
{
	/** @var string */
	public $address;

	/** @var string */
	public $type;

	/** @var int */
	public $code;


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
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->code)) {
			$instance->code = (int)$data->code;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->address !== null) {
			$data->address = $this->address;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->code !== null) {
			$data->code = $this->code;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SimulateGATTOperationResponseRequestBuilder
	 */
	public static function builder(): SimulateGATTOperationResponseRequestBuilder
	{
		return new SimulateGATTOperationResponseRequestBuilder();
	}
}
