<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.StorageBucketDeletedEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StorageBucketDeletedEvent implements \JsonSerializable
{
	/** @var string */
	public $bucketId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->bucketId)) {
			$instance->bucketId = (string)$data->bucketId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->bucketId !== null) {
			$data->bucketId = $this->bucketId;
		}
		return $data;
	}
}
