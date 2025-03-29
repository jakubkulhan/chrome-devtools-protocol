<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddServiceRequestBuilder
{
	private $address;
	private $serviceUuid;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): AddServiceRequest
	{
		$instance = new AddServiceRequest();
		if ($this->address === null) {
			throw new BuilderException('Property [address] is required.');
		}
		$instance->address = $this->address;
		if ($this->serviceUuid === null) {
			throw new BuilderException('Property [serviceUuid] is required.');
		}
		$instance->serviceUuid = $this->serviceUuid;
		return $instance;
	}


	/**
	 * @param string $address
	 *
	 * @return self
	 */
	public function setAddress($address): self
	{
		$this->address = $address;
		return $this;
	}


	/**
	 * @param string $serviceUuid
	 *
	 * @return self
	 */
	public function setServiceUuid($serviceUuid): self
	{
		$this->serviceUuid = $serviceUuid;
		return $this;
	}
}
