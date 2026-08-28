<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Request for Browser.addMockCamera command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddMockCameraRequest implements \JsonSerializable
{
	/**
	 * Required non-empty identifier for the mock camera. This is mapped to an internal virtual-device identifier and is not the MediaDeviceInfo.deviceId exposed to the page.
	 *
	 * @var string
	 */
	public $deviceId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->deviceId)) {
			$instance->deviceId = (string)$data->deviceId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->deviceId !== null) {
			$data->deviceId = $this->deviceId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return AddMockCameraRequestBuilder
	 */
	public static function builder(): AddMockCameraRequestBuilder
	{
		return new AddMockCameraRequestBuilder();
	}
}
