<?php

namespace ChromeDevtoolsProtocol\Model\FileSystem;

/**
 * Named type FileSystem.BucketFileSystemLocator.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BucketFileSystemLocator implements \JsonSerializable
{
	/**
	 * Storage key
	 *
	 * @var string
	 */
	public $storageKey;

	/**
	 * Bucket name. Not passing a `bucketName` will retrieve the default Bucket. (https://developer.mozilla.org/en-US/docs/Web/API/Storage_API#storage_buckets)
	 *
	 * @var string|null
	 */
	public $bucketName;

	/**
	 * Path to the directory using each path component as an array item.
	 *
	 * @var string[]
	 */
	public $pathComponents;


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
		if (isset($data->pathComponents)) {
			$instance->pathComponents = [];
			foreach ($data->pathComponents as $item) {
				$instance->pathComponents[] = (string)$item;
			}
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
		if ($this->pathComponents !== null) {
			$data->pathComponents = [];
			foreach ($this->pathComponents as $item) {
				$data->pathComponents[] = $item;
			}
		}
		return $data;
	}
}
