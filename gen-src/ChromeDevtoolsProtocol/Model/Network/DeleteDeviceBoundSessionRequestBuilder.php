<?php

namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeleteDeviceBoundSessionRequestBuilder
{
	private $key;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DeleteDeviceBoundSessionRequest
	{
		$instance = new DeleteDeviceBoundSessionRequest();
		if ($this->key === null) {
			throw new BuilderException('Property [key] is required.');
		}
		$instance->key = $this->key;
		return $instance;
	}


	/**
	 * @param DeviceBoundSessionKey $key
	 *
	 * @return self
	 */
	public function setKey($key): self
	{
		$this->key = $key;
		return $this;
	}
}
