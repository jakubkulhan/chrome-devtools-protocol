<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Request for Storage.deleteStorageBucket command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeleteStorageBucketRequest implements \JsonSerializable
{
	/** @var string */
	public $storageKey;

	/** @var string */
	public $bucketName;


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
		if (isset($data->bucketName)) {
			$instance->bucketName = (string)$data->bucketName;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->storageKey !== null) {
			$data->storageKey = $this->storageKey;
		}
		if ($this->bucketName !== null) {
			$data->bucketName = $this->bucketName;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return DeleteStorageBucketRequestBuilder
	 */
	public static function builder(): DeleteStorageBucketRequestBuilder
	{
		return new DeleteStorageBucketRequestBuilder();
	}
}
