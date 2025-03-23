<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SimulateGATTOperationResponseRequestBuilder
{
	private $address;
	private $type;
	private $code;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SimulateGATTOperationResponseRequest
	{
		$instance = new SimulateGATTOperationResponseRequest();
		if ($this->address === null) {
			throw new BuilderException('Property [address] is required.');
		}
		$instance->address = $this->address;
		if ($this->type === null) {
			throw new BuilderException('Property [type] is required.');
		}
		$instance->type = $this->type;
		if ($this->code === null) {
			throw new BuilderException('Property [code] is required.');
		}
		$instance->code = $this->code;
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
	 * @param string $type
	 *
	 * @return self
	 */
	public function setType($type): self
	{
		$this->type = $type;
		return $this;
	}


	/**
	 * @param int $code
	 *
	 * @return self
	 */
	public function setCode($code): self
	{
		$this->code = $code;
		return $this;
	}
}
