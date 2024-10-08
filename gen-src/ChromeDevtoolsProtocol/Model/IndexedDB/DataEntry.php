<?php

namespace ChromeDevtoolsProtocol\Model\IndexedDB;

use ChromeDevtoolsProtocol\Model\Runtime\RemoteObject;

/**
 * Data entry.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DataEntry implements \JsonSerializable
{
	/**
	 * Key object.
	 *
	 * @var RemoteObject
	 */
	public $key;

	/**
	 * Primary key object.
	 *
	 * @var RemoteObject
	 */
	public $primaryKey;

	/**
	 * Value object.
	 *
	 * @var RemoteObject
	 */
	public $value;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->key)) {
			$instance->key = RemoteObject::fromJson($data->key);
		}
		if (isset($data->primaryKey)) {
			$instance->primaryKey = RemoteObject::fromJson($data->primaryKey);
		}
		if (isset($data->value)) {
			$instance->value = RemoteObject::fromJson($data->value);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->key !== null) {
			$data->key = $this->key->jsonSerialize();
		}
		if ($this->primaryKey !== null) {
			$data->primaryKey = $this->primaryKey->jsonSerialize();
		}
		if ($this->value !== null) {
			$data->value = $this->value->jsonSerialize();
		}
		return $data;
	}
}
