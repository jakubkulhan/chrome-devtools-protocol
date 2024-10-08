<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.StorageBucketCreatedOrUpdatedEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StorageBucketCreatedOrUpdatedEvent implements \JsonSerializable
{
	/** @var StorageBucketInfo */
	public $bucketInfo;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->bucketInfo)) {
			$instance->bucketInfo = StorageBucketInfo::fromJson($data->bucketInfo);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->bucketInfo !== null) {
			$data->bucketInfo = $this->bucketInfo->jsonSerialize();
		}
		return $data;
	}
}
