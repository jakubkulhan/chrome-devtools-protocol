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
	/** @var StorageBucket */
	public $bucket;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->bucket)) {
			$instance->bucket = StorageBucket::fromJson($data->bucket);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->bucket !== null) {
			$data->bucket = $this->bucket->jsonSerialize();
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
