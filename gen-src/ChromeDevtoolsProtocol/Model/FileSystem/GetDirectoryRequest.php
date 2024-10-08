<?php

namespace ChromeDevtoolsProtocol\Model\FileSystem;

/**
 * Request for FileSystem.getDirectory command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetDirectoryRequest implements \JsonSerializable
{
	/** @var BucketFileSystemLocator */
	public $bucketFileSystemLocator;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->bucketFileSystemLocator)) {
			$instance->bucketFileSystemLocator = BucketFileSystemLocator::fromJson($data->bucketFileSystemLocator);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->bucketFileSystemLocator !== null) {
			$data->bucketFileSystemLocator = $this->bucketFileSystemLocator->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetDirectoryRequestBuilder
	 */
	public static function builder(): GetDirectoryRequestBuilder
	{
		return new GetDirectoryRequestBuilder();
	}
}
