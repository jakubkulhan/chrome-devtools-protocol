<?php

namespace ChromeDevtoolsProtocol\Model\DeviceAccess;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SelectPromptRequestBuilder
{
	private $id;
	private $deviceId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SelectPromptRequest
	{
		$instance = new SelectPromptRequest();
		if ($this->id === null) {
			throw new BuilderException('Property [id] is required.');
		}
		$instance->id = $this->id;
		if ($this->deviceId === null) {
			throw new BuilderException('Property [deviceId] is required.');
		}
		$instance->deviceId = $this->deviceId;
		return $instance;
	}


	/**
	 * @param string $id
	 *
	 * @return self
	 */
	public function setId($id): self
	{
		$this->id = $id;
		return $this;
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
