<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Request for BluetoothEmulation.simulatePreconnectedPeripheral command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SimulatePreconnectedPeripheralRequest implements \JsonSerializable
{
	/** @var string */
	public $address;

	/** @var string */
	public $name;

	/** @var ManufacturerData[] */
	public $manufacturerData;

	/** @var string[] */
	public $knownServiceUuids;


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
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->manufacturerData)) {
			$instance->manufacturerData = [];
			foreach ($data->manufacturerData as $item) {
				$instance->manufacturerData[] = ManufacturerData::fromJson($item);
			}
		}
		if (isset($data->knownServiceUuids)) {
			$instance->knownServiceUuids = [];
			foreach ($data->knownServiceUuids as $item) {
				$instance->knownServiceUuids[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->address !== null) {
			$data->address = $this->address;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->manufacturerData !== null) {
			$data->manufacturerData = [];
			foreach ($this->manufacturerData as $item) {
				$data->manufacturerData[] = $item->jsonSerialize();
			}
		}
		if ($this->knownServiceUuids !== null) {
			$data->knownServiceUuids = [];
			foreach ($this->knownServiceUuids as $item) {
				$data->knownServiceUuids[] = $item;
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SimulatePreconnectedPeripheralRequestBuilder
	 */
	public static function builder(): SimulatePreconnectedPeripheralRequestBuilder
	{
		return new SimulatePreconnectedPeripheralRequestBuilder();
	}
}
