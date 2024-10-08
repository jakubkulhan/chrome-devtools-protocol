<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetAutoDarkModeOverrideRequestBuilder
{
	private $enabled;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetAutoDarkModeOverrideRequest
	{
		$instance = new SetAutoDarkModeOverrideRequest();
		$instance->enabled = $this->enabled;
		return $instance;
	}


	/**
	 * @param bool|null $enabled
	 *
	 * @return self
	 */
	public function setEnabled($enabled): self
	{
		$this->enabled = $enabled;
		return $this;
	}
}
