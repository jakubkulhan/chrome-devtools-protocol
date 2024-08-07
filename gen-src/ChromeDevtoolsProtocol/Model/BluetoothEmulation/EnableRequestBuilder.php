<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableRequestBuilder
{
	private $state;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): EnableRequest
	{
		$instance = new EnableRequest();
		if ($this->state === null) {
			throw new BuilderException('Property [state] is required.');
		}
		$instance->state = $this->state;
		return $instance;
	}


	/**
	 * @param string $state
	 *
	 * @return self
	 */
	public function setState($state): self
	{
		$this->state = $state;
		return $this;
	}
}
