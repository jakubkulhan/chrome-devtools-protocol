<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Describes the properties of a characteristic. This follows Bluetooth Core Specification BT 4.2 Vol 3 Part G 3.3.1. Characteristic Properties.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CharacteristicProperties implements \JsonSerializable
{
	/** @var bool|null */
	public $broadcast;

	/** @var bool|null */
	public $read;

	/** @var bool|null */
	public $writeWithoutResponse;

	/** @var bool|null */
	public $write;

	/** @var bool|null */
	public $notify;

	/** @var bool|null */
	public $indicate;

	/** @var bool|null */
	public $authenticatedSignedWrites;

	/** @var bool|null */
	public $extendedProperties;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->broadcast)) {
			$instance->broadcast = (bool)$data->broadcast;
		}
		if (isset($data->read)) {
			$instance->read = (bool)$data->read;
		}
		if (isset($data->writeWithoutResponse)) {
			$instance->writeWithoutResponse = (bool)$data->writeWithoutResponse;
		}
		if (isset($data->write)) {
			$instance->write = (bool)$data->write;
		}
		if (isset($data->notify)) {
			$instance->notify = (bool)$data->notify;
		}
		if (isset($data->indicate)) {
			$instance->indicate = (bool)$data->indicate;
		}
		if (isset($data->authenticatedSignedWrites)) {
			$instance->authenticatedSignedWrites = (bool)$data->authenticatedSignedWrites;
		}
		if (isset($data->extendedProperties)) {
			$instance->extendedProperties = (bool)$data->extendedProperties;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->broadcast !== null) {
			$data->broadcast = $this->broadcast;
		}
		if ($this->read !== null) {
			$data->read = $this->read;
		}
		if ($this->writeWithoutResponse !== null) {
			$data->writeWithoutResponse = $this->writeWithoutResponse;
		}
		if ($this->write !== null) {
			$data->write = $this->write;
		}
		if ($this->notify !== null) {
			$data->notify = $this->notify;
		}
		if ($this->indicate !== null) {
			$data->indicate = $this->indicate;
		}
		if ($this->authenticatedSignedWrites !== null) {
			$data->authenticatedSignedWrites = $this->authenticatedSignedWrites;
		}
		if ($this->extendedProperties !== null) {
			$data->extendedProperties = $this->extendedProperties;
		}
		return $data;
	}
}
