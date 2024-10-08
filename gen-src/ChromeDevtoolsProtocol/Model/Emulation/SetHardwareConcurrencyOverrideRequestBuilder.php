<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetHardwareConcurrencyOverrideRequestBuilder
{
	private $hardwareConcurrency;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetHardwareConcurrencyOverrideRequest
	{
		$instance = new SetHardwareConcurrencyOverrideRequest();
		if ($this->hardwareConcurrency === null) {
			throw new BuilderException('Property [hardwareConcurrency] is required.');
		}
		$instance->hardwareConcurrency = $this->hardwareConcurrency;
		return $instance;
	}


	/**
	 * @param int $hardwareConcurrency
	 *
	 * @return self
	 */
	public function setHardwareConcurrency($hardwareConcurrency): self
	{
		$this->hardwareConcurrency = $hardwareConcurrency;
		return $this;
	}
}
