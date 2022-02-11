<?php

namespace ChromeDevtoolsProtocol\Model\IndexedDB;

/**
 * Object store.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ObjectStore implements \JsonSerializable
{
	/**
	 * Object store name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Object store key path.
	 *
	 * @var KeyPath
	 */
	public $keyPath;

	/**
	 * If true, object store has auto increment flag set.
	 *
	 * @var bool
	 */
	public $autoIncrement;

	/**
	 * Indexes in this object store.
	 *
	 * @var ObjectStoreIndex[]
	 */
	public $indexes;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->keyPath)) {
			$instance->keyPath = KeyPath::fromJson($data->keyPath);
		}
		if (isset($data->autoIncrement)) {
			$instance->autoIncrement = (bool)$data->autoIncrement;
		}
		if (isset($data->indexes)) {
			$instance->indexes = [];
			foreach ($data->indexes as $item) {
				$instance->indexes[] = ObjectStoreIndex::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->keyPath !== null) {
			$data->keyPath = $this->keyPath->jsonSerialize();
		}
		if ($this->autoIncrement !== null) {
			$data->autoIncrement = $this->autoIncrement;
		}
		if ($this->indexes !== null) {
			$data->indexes = [];
			foreach ($this->indexes as $item) {
				$data->indexes[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
