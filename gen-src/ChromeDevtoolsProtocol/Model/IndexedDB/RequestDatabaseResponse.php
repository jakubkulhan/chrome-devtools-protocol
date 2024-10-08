<?php

namespace ChromeDevtoolsProtocol\Model\IndexedDB;

/**
 * Response to IndexedDB.requestDatabase command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestDatabaseResponse implements \JsonSerializable
{
	/**
	 * Database with an array of object stores.
	 *
	 * @var DatabaseWithObjectStores
	 */
	public $databaseWithObjectStores;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->databaseWithObjectStores)) {
			$instance->databaseWithObjectStores = DatabaseWithObjectStores::fromJson($data->databaseWithObjectStores);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->databaseWithObjectStores !== null) {
			$data->databaseWithObjectStores = $this->databaseWithObjectStores->jsonSerialize();
		}
		return $data;
	}
}
