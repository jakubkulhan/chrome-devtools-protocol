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
	private $descriptorId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RemoveDescriptorRequest
	{
		$instance = new RemoveDescriptorRequest();
		if ($this->descriptorId === null) {
			throw new BuilderException('Property [descriptorId] is required.');
		}
		$instance->descriptorId = $this->descriptorId;
		return $instance;
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
