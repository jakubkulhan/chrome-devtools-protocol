<?php

namespace ChromeDevtoolsProtocol\Model\FileSystem;

/**
 * Named type FileSystem.File.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class File implements \JsonSerializable
{
	/** @var string */
	public $name;

	/**
	 * Timestamp
	 *
	 * @var int|float
	 */
	public $lastModified;

	/**
	 * Size in bytes
	 *
	 * @var int|float
	 */
	public $size;

	/** @var string */
	public $type;


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
		if (isset($data->lastModified)) {
			$instance->lastModified = $data->lastModified;
		}
		if (isset($data->size)) {
			$instance->size = $data->size;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->lastModified !== null) {
			$data->lastModified = $this->lastModified;
		}
		if ($this->size !== null) {
			$data->size = $this->size;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		return $data;
	}
}
