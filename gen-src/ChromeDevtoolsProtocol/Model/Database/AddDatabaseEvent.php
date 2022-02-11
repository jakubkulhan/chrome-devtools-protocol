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


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->database)) {
			$instance->database = Database::fromJson($data->database);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->database !== null) {
			$data->database = $this->database->jsonSerialize();
		}
		return $data;
	}
}
