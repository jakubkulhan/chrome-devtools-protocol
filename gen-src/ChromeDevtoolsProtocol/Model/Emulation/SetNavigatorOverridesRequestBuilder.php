<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetNavigatorOverridesRequestBuilder
{
	private $platform;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetNavigatorOverridesRequest
	{
		$instance = new SetNavigatorOverridesRequest();
		if ($this->platform === null) {
			throw new BuilderException('Property [platform] is required.');
		}
		$instance->platform = $this->platform;
		return $instance;
	}


	/**
	 * @param string $platform
	 *
	 * @return self
	 */
	public function setPlatform($platform): self
	{
		$this->platform = $platform;
		return $this;
	}
}
