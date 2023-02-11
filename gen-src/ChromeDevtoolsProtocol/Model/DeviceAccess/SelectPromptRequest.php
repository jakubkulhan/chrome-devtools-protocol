<?php

namespace ChromeDevtoolsProtocol\Model\DeviceAccess;

/**
 * Request for DeviceAccess.selectPrompt command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SelectPromptRequest implements \JsonSerializable
{
	/** @var string */
	public $id;

	/** @var string */
	public $deviceId;


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
		if (isset($data->deviceId)) {
			$instance->deviceId = (string)$data->deviceId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->deviceId !== null) {
			$data->deviceId = $this->deviceId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SelectPromptRequestBuilder
	 */
	public static function builder(): SelectPromptRequestBuilder
	{
		return new SelectPromptRequestBuilder();
	}
}
