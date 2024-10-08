<?php

namespace ChromeDevtoolsProtocol\Model\Database;

/**
 * Request for Database.executeSQL command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ExecuteSQLRequest implements \JsonSerializable
{
	/** @var string */
	public $databaseId;

	/** @var string */
	public $query;


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
		if (isset($data->query)) {
			$instance->query = (string)$data->query;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->databaseId !== null) {
			$data->databaseId = $this->databaseId;
		}
		if ($this->query !== null) {
			$data->query = $this->query;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ExecuteSQLRequestBuilder
	 */
	public static function builder(): ExecuteSQLRequestBuilder
	{
		return new ExecuteSQLRequestBuilder();
	}
}
