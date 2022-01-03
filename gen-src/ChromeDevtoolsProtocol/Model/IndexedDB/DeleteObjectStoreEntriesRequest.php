<?php

namespace ChromeDevtoolsProtocol\Model\IndexedDB;

/**
 * Request for IndexedDB.deleteObjectStoreEntries command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeleteObjectStoreEntriesRequest implements \JsonSerializable
{
	/** @var string */
	public $securityOrigin;

	/** @var string */
	public $databaseName;

	/** @var string */
	public $objectStoreName;

	/**
	 * Range of entry keys to delete
	 *
	 * @var KeyRange
	 */
	public $keyRange;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->securityOrigin)) {
			$instance->securityOrigin = (string)$data->securityOrigin;
		}
		if (isset($data->databaseName)) {
			$instance->databaseName = (string)$data->databaseName;
		}
		if (isset($data->objectStoreName)) {
			$instance->objectStoreName = (string)$data->objectStoreName;
		}
		if (isset($data->keyRange)) {
			$instance->keyRange = KeyRange::fromJson($data->keyRange);
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->securityOrigin !== null) {
			$data->securityOrigin = $this->securityOrigin;
		}
		if ($this->databaseName !== null) {
			$data->databaseName = $this->databaseName;
		}
		if ($this->objectStoreName !== null) {
			$data->objectStoreName = $this->objectStoreName;
		}
		if ($this->keyRange !== null) {
			$data->keyRange = $this->keyRange->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return DeleteObjectStoreEntriesRequestBuilder
	 */
	public static function builder(): DeleteObjectStoreEntriesRequestBuilder
	{
		return new DeleteObjectStoreEntriesRequestBuilder();
	}
}
