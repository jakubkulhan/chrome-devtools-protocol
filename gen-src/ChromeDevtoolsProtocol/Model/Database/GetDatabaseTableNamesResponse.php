<?php

namespace ChromeDevtoolsProtocol\Model\Database;

/**
 * Response to Database.getDatabaseTableNames command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetDatabaseTableNamesResponse implements \JsonSerializable
{
	/** @var string[] */
	public $tableNames;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->tableNames)) {
			$instance->tableNames = [];
			foreach ($data->tableNames as $item) {
				$instance->tableNames[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->tableNames !== null) {
			$data->tableNames = [];
			foreach ($this->tableNames as $item) {
				$data->tableNames[] = $item;
			}
		}
		return $data;
	}
}
