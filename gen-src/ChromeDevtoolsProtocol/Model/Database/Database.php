<?php

namespace ChromeDevtoolsProtocol\Model\Database;

/**
 * Database object.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Database implements \JsonSerializable
{
	/**
	 * Database ID.
	 *
	 * @var string
	 */
	public $id;

	/**
	 * Database domain.
	 *
	 * @var string
	 */
	public $domain;

	/**
	 * Database name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Database version.
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
		if (isset($data->id)) {
			$instance->id = (string)$data->id;
		}
		if (isset($data->domain)) {
			$instance->domain = (string)$data->domain;
		}
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
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->domain !== null) {
			$data->domain = $this->domain;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->version !== null) {
			$data->version = $this->version;
		}
		return $data;
	}
}
