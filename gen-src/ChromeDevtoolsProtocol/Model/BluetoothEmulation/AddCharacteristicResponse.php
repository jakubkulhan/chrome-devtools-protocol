<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Response to BluetoothEmulation.addCharacteristic command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddCharacteristicResponse implements \JsonSerializable
{
	/**
	 * An identifier that uniquely represents this characteristic.
	 *
	 * @var string
	 */
	public $characteristicId;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->characteristicId !== null) {
			$data->characteristicId = $this->characteristicId;
		}
		return $data;
	}
}
