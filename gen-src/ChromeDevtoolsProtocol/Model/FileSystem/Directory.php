<?php

namespace ChromeDevtoolsProtocol\Model\FileSystem;

/**
 * Named type FileSystem.Directory.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Directory implements \JsonSerializable
{
	/** @var string */
	public $name;

	/** @var string[] */
	public $nestedDirectories;

	/**
	 * Files that are directly nested under this directory.
	 *
	 * @var File[]
	 */
	public $nestedFiles;


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
		if (isset($data->nestedDirectories)) {
			$instance->nestedDirectories = [];
			foreach ($data->nestedDirectories as $item) {
				$instance->nestedDirectories[] = (string)$item;
			}
		}
		if (isset($data->nestedFiles)) {
			$instance->nestedFiles = [];
			foreach ($data->nestedFiles as $item) {
				$instance->nestedFiles[] = File::fromJson($item);
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
		if ($this->nestedDirectories !== null) {
			$data->nestedDirectories = [];
			foreach ($this->nestedDirectories as $item) {
				$data->nestedDirectories[] = $item;
			}
		}
		if ($this->nestedFiles !== null) {
			$data->nestedFiles = [];
			foreach ($this->nestedFiles as $item) {
				$data->nestedFiles[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
