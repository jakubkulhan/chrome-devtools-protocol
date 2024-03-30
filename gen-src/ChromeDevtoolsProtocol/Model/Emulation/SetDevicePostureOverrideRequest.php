<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setDevicePostureOverride command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDevicePostureOverrideRequest implements \JsonSerializable
{
	/** @var DevicePosture */
	public $posture;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->posture)) {
			$instance->posture = DevicePosture::fromJson($data->posture);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->posture !== null) {
			$data->posture = $this->posture->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetDevicePostureOverrideRequestBuilder
	 */
	public static function builder(): SetDevicePostureOverrideRequestBuilder
	{
		return new SetDevicePostureOverrideRequestBuilder();
	}
}
