<?php

namespace ChromeDevtoolsProtocol\Model\Database;

/**
 * Request for Database.getDatabaseTableNames command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetDatabaseTableNamesRequest implements \JsonSerializable
{
	/** @var string */
	public $databaseId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->databaseId)) {
			$instance->databaseId = (string)$data->databaseId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->databaseId !== null) {
			$data->databaseId = $this->databaseId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetDatabaseTableNamesRequestBuilder
	 */
	public static function builder(): GetDatabaseTableNamesRequestBuilder
	{
		return new GetDatabaseTableNamesRequestBuilder();
	}
}
