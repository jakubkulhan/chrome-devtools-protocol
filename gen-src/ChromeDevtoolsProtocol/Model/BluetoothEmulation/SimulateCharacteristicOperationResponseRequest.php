<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Request for BluetoothEmulation.simulateCharacteristicOperationResponse command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SimulateCharacteristicOperationResponseRequest implements \JsonSerializable
{
	/** @var string */
	public $characteristicId;

	/** @var string */
	public $type;

	/** @var int */
	public $code;

	/** @var string|null */
	public $data;


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
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->code)) {
			$instance->code = (int)$data->code;
		}
		if (isset($data->data)) {
			$instance->data = (string)$data->data;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->characteristicId !== null) {
			$data->characteristicId = $this->characteristicId;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->code !== null) {
			$data->code = $this->code;
		}
		if ($this->data !== null) {
			$data->data = $this->data;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SimulateCharacteristicOperationResponseRequestBuilder
	 */
	public static function builder(): SimulateCharacteristicOperationResponseRequestBuilder
	{
		return new SimulateCharacteristicOperationResponseRequestBuilder();
	}
}
