<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Request for Storage.clearDataForStorageKey command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ClearDataForStorageKeyRequest implements \JsonSerializable
{
	/**
	 * Storage key.
	 *
	 * @var string
	 */
	public $storageKey;

	/**
	 * Comma separated list of StorageType to clear.
	 *
	 * @var string
	 */
	public $storageTypes;


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
		if (isset($data->storageTypes)) {
			$instance->storageTypes = (string)$data->storageTypes;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->storageKey !== null) {
			$data->storageKey = $this->storageKey;
		}
		if ($this->storageTypes !== null) {
			$data->storageTypes = $this->storageTypes;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ClearDataForStorageKeyRequestBuilder
	 */
	public static function builder(): ClearDataForStorageKeyRequestBuilder
	{
		return new ClearDataForStorageKeyRequestBuilder();
	}
}
