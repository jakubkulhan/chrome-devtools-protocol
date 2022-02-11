<?php

namespace ChromeDevtoolsProtocol\Model\Memory;

/**
 * Executable module information
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Module implements \JsonSerializable
{
	/**
	 * Name of the module.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * UUID of the module.
	 *
	 * @var string
	 */
	public $uuid;

	/**
	 * Base address where the module is loaded into memory. Encoded as a decimal or hexadecimal (0x prefixed) string.
	 *
	 * @var string
	 */
	public $baseAddress;

	/**
	 * Size of the module in bytes.
	 *
	 * @var int|float
	 */
	public $size;


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
		if (isset($data->uuid)) {
			$instance->uuid = (string)$data->uuid;
		}
		if (isset($data->baseAddress)) {
			$instance->baseAddress = (string)$data->baseAddress;
		}
		if (isset($data->size)) {
			$instance->size = $data->size;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->uuid !== null) {
			$data->uuid = $this->uuid;
		}
		if ($this->baseAddress !== null) {
			$data->baseAddress = $this->baseAddress;
		}
		if ($this->size !== null) {
			$data->size = $this->size;
		}
		return $data;
	}
}
