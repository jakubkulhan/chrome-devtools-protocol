<?php

namespace ChromeDevtoolsProtocol\Model\Extensions;

/**
 * Detailed information about an extension.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ExtensionInfo implements \JsonSerializable
{
	/**
	 * Extension id.
	 *
	 * @var string
	 */
	public $id;

	/**
	 * Extension name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Extension version.
	 *
	 * @var string
	 */
	public $version;

	/**
	 * The path from which the extension was loaded.
	 *
	 * @var string
	 */
	public $path;

	/**
	 * Extension enabled status.
	 *
	 * @var bool
	 */
	public $enabled;


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
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->version)) {
			$instance->version = (string)$data->version;
		}
		if (isset($data->path)) {
			$instance->path = (string)$data->path;
		}
		if (isset($data->enabled)) {
			$instance->enabled = (bool)$data->enabled;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->version !== null) {
			$data->version = $this->version;
		}
		if ($this->path !== null) {
			$data->path = $this->path;
		}
		if ($this->enabled !== null) {
			$data->enabled = $this->enabled;
		}
		return $data;
	}
}
