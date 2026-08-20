<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetGlobalPrivacyControlRequestBuilder
{
	private $gpc;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetGlobalPrivacyControlRequest
	{
		$instance = new SetGlobalPrivacyControlRequest();
		if ($this->gpc === null) {
			throw new BuilderException('Property [gpc] is required.');
		}
		$instance->gpc = $this->gpc;
		return $instance;
	}


	/**
	 * @param bool $gpc
	 *
	 * @return self
	 */
	public function setGpc($gpc): self
	{
		$this->gpc = $gpc;
		return $this;
	}
}
