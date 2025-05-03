<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Request for BluetoothEmulation.simulateDescriptorOperationResponse command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SimulateDescriptorOperationResponseRequest implements \JsonSerializable
{
	/** @var string */
	public $descriptorId;

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
		if (isset($data->descriptorId)) {
			$instance->descriptorId = (string)$data->descriptorId;
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
		if ($this->descriptorId !== null) {
			$data->descriptorId = $this->descriptorId;
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
	 * @return SimulateDescriptorOperationResponseRequestBuilder
	 */
	public static function builder(): SimulateDescriptorOperationResponseRequestBuilder
	{
		return new SimulateDescriptorOperationResponseRequestBuilder();
	}
}
