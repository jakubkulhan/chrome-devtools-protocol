<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Request for Storage.trackCacheStorageForStorageKey command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TrackCacheStorageForStorageKeyRequest implements \JsonSerializable
{
	/**
	 * Storage key.
	 *
	 * @var string
	 */
	public $storageKey;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->storageKey !== null) {
			$data->storageKey = $this->storageKey;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return TrackCacheStorageForStorageKeyRequestBuilder
	 */
	public static function builder(): TrackCacheStorageForStorageKeyRequestBuilder
	{
		return new TrackCacheStorageForStorageKeyRequestBuilder();
	}
}
