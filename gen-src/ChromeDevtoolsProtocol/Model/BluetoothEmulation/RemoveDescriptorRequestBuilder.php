<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoveDescriptorRequestBuilder
{
	private $address;
	private $serviceId;
	private $characteristicId;
	private $descriptorId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RemoveDescriptorRequest
	{
		$instance = new RemoveDescriptorRequest();
		if ($this->address === null) {
			throw new BuilderException('Property [address] is required.');
		}
		$instance->address = $this->address;
		if ($this->serviceId === null) {
			throw new BuilderException('Property [serviceId] is required.');
		}
		$instance->serviceId = $this->serviceId;
		if ($this->characteristicId === null) {
			throw new BuilderException('Property [characteristicId] is required.');
		}
		$instance->characteristicId = $this->characteristicId;
		if ($this->descriptorId === null) {
			throw new BuilderException('Property [descriptorId] is required.');
		}
		$instance->descriptorId = $this->descriptorId;
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
	 * @param string $serviceId
	 *
	 * @return self
	 */
	public function setServiceId($serviceId): self
	{
		$this->serviceId = $serviceId;
		return $this;
	}


	/**
	 * @param string $characteristicId
	 *
	 * @return self
	 */
	public function setCharacteristicId($characteristicId): self
	{
		$this->characteristicId = $characteristicId;
		return $this;
	}


	/**
	 * @param string $descriptorId
	 *
	 * @return self
	 */
	public function setDescriptorId($descriptorId): self
	{
		$this->descriptorId = $descriptorId;
		return $this;
	}
}
