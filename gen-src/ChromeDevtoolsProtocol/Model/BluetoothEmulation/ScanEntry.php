<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Stores the advertisement packet information that is sent by a Bluetooth device.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScanEntry implements \JsonSerializable
{
	/** @var string */
	public $deviceAddress;

	/** @var int */
	public $rssi;

	/** @var ScanRecord */
	public $scanRecord;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->deviceAddress)) {
			$instance->deviceAddress = (string)$data->deviceAddress;
		}
		if (isset($data->rssi)) {
			$instance->rssi = (int)$data->rssi;
		}
		if (isset($data->scanRecord)) {
			$instance->scanRecord = ScanRecord::fromJson($data->scanRecord);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->deviceAddress !== null) {
			$data->deviceAddress = $this->deviceAddress;
		}
		if ($this->rssi !== null) {
			$data->rssi = $this->rssi;
		}
		if ($this->scanRecord !== null) {
			$data->scanRecord = $this->scanRecord->jsonSerialize();
		}
		return $data;
	}
}
