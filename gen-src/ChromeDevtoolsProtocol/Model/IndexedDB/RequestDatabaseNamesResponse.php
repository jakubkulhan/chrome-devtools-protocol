<?php

namespace ChromeDevtoolsProtocol\Model\IndexedDB;

/**
 * Response to IndexedDB.requestDatabaseNames command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestDatabaseNamesResponse implements \JsonSerializable
{
	/**
	 * Database names for origin.
	 *
	 * @var string[]
	 */
	public $databaseNames;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->databaseNames)) {
			$instance->databaseNames = [];
			foreach ($data->databaseNames as $item) {
				$instance->databaseNames[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->databaseNames !== null) {
			$data->databaseNames = [];
			foreach ($this->databaseNames as $item) {
				$data->databaseNames[] = $item;
			}
		}
		return $data;
	}
}
