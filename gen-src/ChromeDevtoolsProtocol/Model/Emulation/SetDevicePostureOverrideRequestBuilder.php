<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDevicePostureOverrideRequestBuilder
{
	private $posture;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetDevicePostureOverrideRequest
	{
		$instance = new SetDevicePostureOverrideRequest();
		if ($this->posture === null) {
			throw new BuilderException('Property [posture] is required.');
		}
		$instance->posture = $this->posture;
		return $instance;
	}


	/**
	 * @param DevicePosture $posture
	 *
	 * @return self
	 */
	public function setPosture($posture): self
	{
		$this->posture = $posture;
		return $this;
	}
}
