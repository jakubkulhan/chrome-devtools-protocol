<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SimulateCharacteristicOperationResponseRequestBuilder
{
	private $characteristicId;
	private $type;
	private $code;
	private $data;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SimulateCharacteristicOperationResponseRequest
	{
		$instance = new SimulateCharacteristicOperationResponseRequest();
		if ($this->characteristicId === null) {
			throw new BuilderException('Property [characteristicId] is required.');
		}
		$instance->characteristicId = $this->characteristicId;
		if ($this->type === null) {
			throw new BuilderException('Property [type] is required.');
		}
		$instance->type = $this->type;
		if ($this->code === null) {
			throw new BuilderException('Property [code] is required.');
		}
		$instance->code = $this->code;
		$instance->data = $this->data;
		return $instance;
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


	/**
	 * @param string|null $data
	 *
	 * @return self
	 */
	public function setData($data): self
	{
		$this->data = $data;
		return $this;
	}
}
