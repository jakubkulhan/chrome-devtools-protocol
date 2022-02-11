<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Usage for a storage type.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class UsageForType implements \JsonSerializable
{
	/**
	 * Name of storage type.
	 *
	 * @var string
	 */
	public $storageType;

	/**
	 * Storage usage (bytes).
	 *
	 * @var int|float
	 */
	public $usage;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->storageType)) {
			$instance->storageType = (string)$data->storageType;
		}
		if (isset($data->usage)) {
			$instance->usage = $data->usage;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->storageType !== null) {
			$data->storageType = $this->storageType;
		}
		if ($this->usage !== null) {
			$data->usage = $this->usage;
		}
		return $data;
	}
}
