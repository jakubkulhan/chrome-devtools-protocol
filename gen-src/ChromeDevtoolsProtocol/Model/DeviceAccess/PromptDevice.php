<?php

namespace ChromeDevtoolsProtocol\Model\DeviceAccess;

/**
 * Device information displayed in a user prompt to select a device.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PromptDevice implements \JsonSerializable
{
	/** @var string */
	public $id;

	/**
	 * Display name as it appears in a device request user prompt.
	 *
	 * @var string
	 */
	public $name;


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
		return $data;
	}
}
