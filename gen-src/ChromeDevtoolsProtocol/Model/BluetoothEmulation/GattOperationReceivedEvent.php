<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Event for when a GATT operation of |type| to the peripheral with |address| happened.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GattOperationReceivedEvent implements \JsonSerializable
{
	/** @var string */
	public $address;

	/** @var string */
	public $type;


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
		return $data;
	}
}
