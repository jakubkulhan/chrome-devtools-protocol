<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SimulatePreconnectedPeripheralRequestBuilder
{
	private $address;
	private $name;
	private $manufacturerData;
	private $knownServiceUuids;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SimulatePreconnectedPeripheralRequest
	{
		$instance = new SimulatePreconnectedPeripheralRequest();
		if ($this->address === null) {
			throw new BuilderException('Property [address] is required.');
		}
		$instance->address = $this->address;
		if ($this->name === null) {
			throw new BuilderException('Property [name] is required.');
		}
		$instance->name = $this->name;
		if ($this->manufacturerData === null) {
			throw new BuilderException('Property [manufacturerData] is required.');
		}
		$instance->manufacturerData = $this->manufacturerData;
		if ($this->knownServiceUuids === null) {
			throw new BuilderException('Property [knownServiceUuids] is required.');
		}
		$instance->knownServiceUuids = $this->knownServiceUuids;
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
	 * @param string $name
	 *
	 * @return self
	 */
	public function setName($name): self
	{
		$this->name = $name;
		return $this;
	}


	/**
	 * @param ManufacturerData[] $manufacturerData
	 *
	 * @return self
	 */
	public function setManufacturerData($manufacturerData): self
	{
		$this->manufacturerData = $manufacturerData;
		return $this;
	}


	/**
	 * @param string[] $knownServiceUuids
	 *
	 * @return self
	 */
	public function setKnownServiceUuids($knownServiceUuids): self
	{
		$this->knownServiceUuids = $knownServiceUuids;
		return $this;
	}
}
