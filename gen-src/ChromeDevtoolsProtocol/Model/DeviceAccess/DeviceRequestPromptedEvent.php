<?php

namespace ChromeDevtoolsProtocol\Model\DeviceAccess;

/**
 * A device request opened a user prompt to select a device. Respond with the selectPrompt or cancelPrompt command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeviceRequestPromptedEvent implements \JsonSerializable
{
	/** @var string */
	public $id;

	/** @var PromptDevice[] */
	public $devices;


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
		if (isset($data->devices)) {
			$instance->devices = [];
			foreach ($data->devices as $item) {
				$instance->devices[] = PromptDevice::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->devices !== null) {
			$data->devices = [];
			foreach ($this->devices as $item) {
				$data->devices[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
