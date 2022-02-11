<?php

namespace ChromeDevtoolsProtocol\Model\Schema;

/**
 * Description of the protocol domain.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Domain implements \JsonSerializable
{
	/**
	 * Domain name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Domain version.
	 *
	 * @var string
	 */
	public $version;


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
		if (isset($data->version)) {
			$instance->version = (string)$data->version;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->version !== null) {
			$data->version = $this->version;
		}
		return $data;
	}
}
