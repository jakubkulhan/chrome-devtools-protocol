<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Stores the byte data of the advertisement packet sent by a Bluetooth device.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScanRecord implements \JsonSerializable
{
	/** @var string|null */
	public $name;

	/** @var string[]|null */
	public $uuids;

	/**
	 * Stores the external appearance description of the device.
	 *
	 * @var int|null
	 */
	public $appearance;

	/**
	 * Stores the transmission power of a broadcasting device.
	 *
	 * @var int|null
	 */
	public $txPower;

	/**
	 * Key is the company identifier and the value is an array of bytes of manufacturer specific data.
	 *
	 * @var ManufacturerData[]|null
	 */
	public $manufacturerData;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->uuids)) {
			$instance->uuids = [];
			foreach ($data->uuids as $item) {
				$instance->uuids[] = (string)$item;
			}
		}
		if (isset($data->appearance)) {
			$instance->appearance = (int)$data->appearance;
		}
		if (isset($data->txPower)) {
			$instance->txPower = (int)$data->txPower;
		}
		if (isset($data->manufacturerData)) {
			$instance->manufacturerData = [];
			foreach ($data->manufacturerData as $item) {
				$instance->manufacturerData[] = ManufacturerData::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->uuids !== null) {
			$data->uuids = [];
			foreach ($this->uuids as $item) {
				$data->uuids[] = $item;
			}
		}
		if ($this->appearance !== null) {
			$data->appearance = $this->appearance;
		}
		if ($this->txPower !== null) {
			$data->txPower = $this->txPower;
		}
		if ($this->manufacturerData !== null) {
			$data->manufacturerData = [];
			foreach ($this->manufacturerData as $item) {
				$data->manufacturerData[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
