<?php

namespace ChromeDevtoolsProtocol\Model\IndexedDB;

use ChromeDevtoolsProtocol\Model\Storage\StorageBucket;

/**
 * Request for IndexedDB.requestData command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestDataRequest implements \JsonSerializable
{
	/**
	 * At least and at most one of securityOrigin, storageKey, or storageBucket must be specified. Security origin.
	 *
	 * @var string|null
	 */
	public $securityOrigin;

	/**
	 * Storage key.
	 *
	 * @var string|null
	 */
	public $storageKey;

	/**
	 * Storage bucket. If not specified, it uses the default bucket.
	 *
	 * @var StorageBucket|null
	 */
	public $storageBucket;

	/**
	 * Database name.
	 *
	 * @var string
	 */
	public $databaseName;

	/**
	 * Object store name.
	 *
	 * @var string
	 */
	public $objectStoreName;

	/**
	 * Index name. If not specified, it performs an object store data request.
	 *
	 * @var string|null
	 */
	public $indexName;

	/**
	 * Number of records to skip.
	 *
	 * @var int
	 */
	public $skipCount;

	/**
	 * Number of records to fetch.
	 *
	 * @var int
	 */
	public $pageSize;

	/**
	 * Key range.
	 *
	 * @var KeyRange|null
	 */
	public $keyRange;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->securityOrigin)) {
			$instance->securityOrigin = (string)$data->securityOrigin;
		}
		if (isset($data->storageKey)) {
			$instance->storageKey = (string)$data->storageKey;
		}
		if (isset($data->storageBucket)) {
			$instance->storageBucket = StorageBucket::fromJson($data->storageBucket);
		}
		if (isset($data->databaseName)) {
			$instance->databaseName = (string)$data->databaseName;
		}
		if (isset($data->objectStoreName)) {
			$instance->objectStoreName = (string)$data->objectStoreName;
		}
		if (isset($data->indexName)) {
			$instance->indexName = (string)$data->indexName;
		}
		if (isset($data->skipCount)) {
			$instance->skipCount = (int)$data->skipCount;
		}
		if (isset($data->pageSize)) {
			$instance->pageSize = (int)$data->pageSize;
		}
		if (isset($data->keyRange)) {
			$instance->keyRange = KeyRange::fromJson($data->keyRange);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->securityOrigin !== null) {
			$data->securityOrigin = $this->securityOrigin;
		}
		if ($this->storageKey !== null) {
			$data->storageKey = $this->storageKey;
		}
		if ($this->storageBucket !== null) {
			$data->storageBucket = $this->storageBucket->jsonSerialize();
		}
		if ($this->databaseName !== null) {
			$data->databaseName = $this->databaseName;
		}
		if ($this->objectStoreName !== null) {
			$data->objectStoreName = $this->objectStoreName;
		}
		if ($this->indexName !== null) {
			$data->indexName = $this->indexName;
		}
		if ($this->skipCount !== null) {
			$data->skipCount = $this->skipCount;
		}
		if ($this->pageSize !== null) {
			$data->pageSize = $this->pageSize;
		}
		if ($this->keyRange !== null) {
			$data->keyRange = $this->keyRange->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return RequestDataRequestBuilder
	 */
	public static function builder(): RequestDataRequestBuilder
	{
		return new RequestDataRequestBuilder();
	}
}
