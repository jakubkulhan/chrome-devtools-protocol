<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoveCharacteristicRequestBuilder
{
	private $characteristicId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RemoveCharacteristicRequest
	{
		$instance = new RemoveCharacteristicRequest();
		if ($this->characteristicId === null) {
			throw new BuilderException('Property [characteristicId] is required.');
		}
		$instance->characteristicId = $this->characteristicId;
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
}
