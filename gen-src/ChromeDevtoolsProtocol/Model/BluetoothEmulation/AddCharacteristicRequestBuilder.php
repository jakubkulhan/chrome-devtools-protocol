<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddCharacteristicRequestBuilder
{
	private $serviceId;
	private $characteristicUuid;
	private $properties;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): AddCharacteristicRequest
	{
		$instance = new AddCharacteristicRequest();
		if ($this->serviceId === null) {
			throw new BuilderException('Property [serviceId] is required.');
		}
		$instance->serviceId = $this->serviceId;
		if ($this->characteristicUuid === null) {
			throw new BuilderException('Property [characteristicUuid] is required.');
		}
		$instance->characteristicUuid = $this->characteristicUuid;
		if ($this->properties === null) {
			throw new BuilderException('Property [properties] is required.');
		}
		$instance->properties = $this->properties;
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


	/**
	 * @param string $characteristicUuid
	 *
	 * @return self
	 */
	public function setCharacteristicUuid($characteristicUuid): self
	{
		$this->characteristicUuid = $characteristicUuid;
		return $this;
	}


	/**
	 * @param CharacteristicProperties $properties
	 *
	 * @return self
	 */
	public function setProperties($properties): self
	{
		$this->properties = $properties;
		return $this;
	}
}
