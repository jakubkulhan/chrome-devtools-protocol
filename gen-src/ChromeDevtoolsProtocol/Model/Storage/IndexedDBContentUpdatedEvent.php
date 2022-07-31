<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * The origin's IndexedDB object store has been modified.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class IndexedDBContentUpdatedEvent implements \JsonSerializable
{
	/**
	 * Origin to update.
	 *
	 * @var string
	 */
	public $origin;

	/**
	 * Storage key to update.
	 *
	 * @var string
	 */
	public $storageKey;

	/**
	 * Database to update.
	 *
	 * @var string
	 */
	public $databaseName;

	/**
	 * ObjectStore to update.
	 *
	 * @var string
	 */
	public $objectStoreName;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		if (isset($data->storageKey)) {
			$instance->storageKey = (string)$data->storageKey;
		}
		if (isset($data->databaseName)) {
			$instance->databaseName = (string)$data->databaseName;
		}
		if (isset($data->objectStoreName)) {
			$instance->objectStoreName = (string)$data->objectStoreName;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		if ($this->storageKey !== null) {
			$data->storageKey = $this->storageKey;
		}
		if ($this->databaseName !== null) {
			$data->databaseName = $this->databaseName;
		}
		if ($this->objectStoreName !== null) {
			$data->objectStoreName = $this->objectStoreName;
		}
		return $data;
	}
}
