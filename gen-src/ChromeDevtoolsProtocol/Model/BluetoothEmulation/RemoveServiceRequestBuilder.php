<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoveServiceRequestBuilder
{
	private $serviceId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RemoveServiceRequest
	{
		$instance = new RemoveServiceRequest();
		if ($this->serviceId === null) {
			throw new BuilderException('Property [serviceId] is required.');
		}
		$instance->serviceId = $this->serviceId;
		return $instance;
	}


	/**
	 * @param string $serviceId
	 *
	 * @return self
	 */
	public function setServiceId($serviceId): self
	{
		$this->serviceId = $serviceId;
		return $this;
	}
}
