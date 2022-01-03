<?php

namespace ChromeDevtoolsProtocol\Model\Database;

/**
 * Named type Database.AddDatabaseEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddDatabaseEvent implements \JsonSerializable
{
	/** @var Database */
	public $database;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->database)) {
			$instance->database = Database::fromJson($data->database);
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->database !== null) {
			$data->database = $this->database->jsonSerialize();
		}
		return $data;
	}
}
