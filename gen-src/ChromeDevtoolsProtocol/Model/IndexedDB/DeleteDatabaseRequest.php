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
	 * Security origin.
	 *
	 * @var string
	 */
	public $securityOrigin;

	/**
	 * Database name.
	 *
	 * @var string
	 */
	public $databaseName;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->securityOrigin)) {
			$instance->securityOrigin = (string)$data->securityOrigin;
		}
		if (isset($data->databaseName)) {
			$instance->databaseName = (string)$data->databaseName;
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
