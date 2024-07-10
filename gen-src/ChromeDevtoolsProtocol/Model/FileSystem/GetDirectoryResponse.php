<?php

namespace ChromeDevtoolsProtocol\Model\FileSystem;

/**
 * Response to FileSystem.getDirectory command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetDirectoryResponse implements \JsonSerializable
{
	/**
	 * Returns the directory object at the path.
	 *
	 * @var Directory
	 */
	public $directory;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->directory)) {
			$instance->directory = Directory::fromJson($data->directory);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->directory !== null) {
			$data->directory = $this->directory->jsonSerialize();
		}
		return $data;
	}
}
