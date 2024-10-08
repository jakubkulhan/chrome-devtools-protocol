<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.StorageBucket.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StorageBucket implements \JsonSerializable
{
	/** @var string */
	public $storageKey;

	/**
	 * If not specified, it is the default bucket of the storageKey.
	 *
	 * @var string|null
	 */
	public $name;


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
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->storageKey !== null) {
			$data->storageKey = $this->storageKey;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		return $data;
	}
}
