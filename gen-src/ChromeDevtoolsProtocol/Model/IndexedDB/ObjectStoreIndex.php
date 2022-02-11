<?php

namespace ChromeDevtoolsProtocol\Model\IndexedDB;

/**
 * Object store index.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ObjectStoreIndex implements \JsonSerializable
{
	/**
	 * Index name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Index key path.
	 *
	 * @var KeyPath
	 */
	public $keyPath;

	/**
	 * If true, index is unique.
	 *
	 * @var bool
	 */
	public $unique;

	/**
	 * If true, index allows multiple entries for a key.
	 *
	 * @var bool
	 */
	public $multiEntry;


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
		if (isset($data->unique)) {
			$instance->unique = (bool)$data->unique;
		}
		if (isset($data->multiEntry)) {
			$instance->multiEntry = (bool)$data->multiEntry;
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
		if ($this->unique !== null) {
			$data->unique = $this->unique;
		}
		if ($this->multiEntry !== null) {
			$data->multiEntry = $this->multiEntry;
		}
		return $data;
	}
}
