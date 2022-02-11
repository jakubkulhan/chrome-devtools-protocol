<?php

namespace ChromeDevtoolsProtocol\Model\IndexedDB;

/**
 * Request for IndexedDB.requestDatabase command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestDatabaseRequest implements \JsonSerializable
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
		if ($this->databaseName !== null) {
			$data->databaseName = $this->databaseName;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return RequestDatabaseRequestBuilder
	 */
	public static function builder(): RequestDatabaseRequestBuilder
	{
		return new RequestDatabaseRequestBuilder();
	}
}
