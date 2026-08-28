<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddMockCameraRequestBuilder
{
	private $deviceId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): AddMockCameraRequest
	{
		$instance = new AddMockCameraRequest();
		if ($this->deviceId === null) {
			throw new BuilderException('Property [deviceId] is required.');
		}
		$instance->deviceId = $this->deviceId;
		return $instance;
	}


	/**
	 * @param string $deviceId
	 *
	 * @return self
	 */
	public function setDeviceId($deviceId): self
	{
		$this->deviceId = $deviceId;
		return $this;
	}
}
