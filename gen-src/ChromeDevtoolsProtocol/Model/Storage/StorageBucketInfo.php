<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.StorageBucketInfo.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StorageBucketInfo implements \JsonSerializable
{
	/** @var string */
	public $storageKey;

	/** @var string */
	public $id;

	/** @var string */
	public $name;

	/** @var bool */
	public $isDefault;

	/** @var int|float */
	public $expiration;

	/**
	 * Storage quota (bytes).
	 *
	 * @var int|float
	 */
	public $quota;

	/** @var bool */
	public $persistent;

	/** @var string */
	public $durability;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->storageKey)) {
			$instance->storageKey = (string)$data->storageKey;
		}
		if (isset($data->id)) {
			$instance->id = (string)$data->id;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->isDefault)) {
			$instance->isDefault = (bool)$data->isDefault;
		}
		if (isset($data->expiration)) {
			$instance->expiration = $data->expiration;
		}
		if (isset($data->quota)) {
			$instance->quota = $data->quota;
		}
		if (isset($data->persistent)) {
			$instance->persistent = (bool)$data->persistent;
		}
		if (isset($data->durability)) {
			$instance->durability = (string)$data->durability;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->storageKey !== null) {
			$data->storageKey = $this->storageKey;
		}
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->isDefault !== null) {
			$data->isDefault = $this->isDefault;
		}
		if ($this->expiration !== null) {
			$data->expiration = $this->expiration;
		}
		if ($this->quota !== null) {
			$data->quota = $this->quota;
		}
		if ($this->persistent !== null) {
			$data->persistent = $this->persistent;
		}
		if ($this->durability !== null) {
			$data->durability = $this->durability;
		}
		return $data;
	}
}
