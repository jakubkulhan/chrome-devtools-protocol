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
	public $bucket;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->bucket)) {
			$instance->bucket = StorageBucketInfo::fromJson($data->bucket);
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
}
