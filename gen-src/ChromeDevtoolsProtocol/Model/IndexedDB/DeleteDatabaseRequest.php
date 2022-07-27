<?php

namespace ChromeDevtoolsProtocol\Model\IndexedDB;

/**
 * Request for IndexedDB.deleteDatabase command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeleteDatabaseRequest implements \JsonSerializable
{
	/**
	 * At least and at most one of securityOrigin, storageKey must be specified. Security origin.
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
	 * Database name.
	 *
	 * @var string
	 */
	public $databaseName;


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
		if (isset($data->databaseName)) {
			$instance->databaseName = (string)$data->databaseName;
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
		if ($this->databaseName !== null) {
			$data->databaseName = $this->databaseName;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return DeleteDatabaseRequestBuilder
	 */
	public static function builder(): DeleteDatabaseRequestBuilder
	{
		return new DeleteDatabaseRequestBuilder();
	}
}
