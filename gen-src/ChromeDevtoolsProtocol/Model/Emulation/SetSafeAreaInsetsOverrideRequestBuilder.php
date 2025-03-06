<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetSafeAreaInsetsOverrideRequestBuilder
{
	private $insets;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetSafeAreaInsetsOverrideRequest
	{
		$instance = new SetSafeAreaInsetsOverrideRequest();
		if ($this->insets === null) {
			throw new BuilderException('Property [insets] is required.');
		}
		$instance->insets = $this->insets;
		return $instance;
	}


	/**
	 * @param SafeAreaInsets $insets
	 *
	 * @return self
	 */
	public function setInsets($insets): self
	{
		$this->insets = $insets;
		return $this;
	}
}
