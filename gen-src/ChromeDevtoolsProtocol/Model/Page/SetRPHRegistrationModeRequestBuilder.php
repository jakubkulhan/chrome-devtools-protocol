<?php

namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetRPHRegistrationModeRequestBuilder
{
	private $mode;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetRPHRegistrationModeRequest
	{
		$instance = new SetRPHRegistrationModeRequest();
		if ($this->mode === null) {
			throw new BuilderException('Property [mode] is required.');
		}
		$instance->mode = $this->mode;
		return $instance;
	}


	/**
	 * @param string $mode
	 *
	 * @return self
	 */
	public function setMode($mode): self
	{
		$this->mode = $mode;
		return $this;
	}
}
