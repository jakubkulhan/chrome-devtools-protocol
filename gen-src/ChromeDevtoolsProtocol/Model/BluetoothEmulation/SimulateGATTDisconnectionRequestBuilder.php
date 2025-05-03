<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SimulateGATTDisconnectionRequestBuilder
{
	private $address;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SimulateGATTDisconnectionRequest
	{
		$instance = new SimulateGATTDisconnectionRequest();
		if ($this->address === null) {
			throw new BuilderException('Property [address] is required.');
		}
		$instance->address = $this->address;
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
}
