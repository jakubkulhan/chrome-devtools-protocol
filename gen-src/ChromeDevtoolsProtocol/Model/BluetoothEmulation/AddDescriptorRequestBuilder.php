<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddDescriptorRequestBuilder
{
	private $address;
	private $serviceId;
	private $characteristicId;
	private $descriptorUuid;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): AddDescriptorRequest
	{
		$instance = new AddDescriptorRequest();
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
		if ($this->descriptorUuid === null) {
			throw new BuilderException('Property [descriptorUuid] is required.');
		}
		$instance->descriptorUuid = $this->descriptorUuid;
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
	 * @param string $descriptorUuid
	 *
	 * @return self
	 */
	public function setDescriptorUuid($descriptorUuid): self
	{
		$this->descriptorUuid = $descriptorUuid;
		return $this;
	}
}
