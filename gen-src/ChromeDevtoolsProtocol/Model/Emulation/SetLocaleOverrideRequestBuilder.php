<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetLocaleOverrideRequestBuilder
{
	private $locale;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetLocaleOverrideRequest
	{
		$instance = new SetLocaleOverrideRequest();
		$instance->locale = $this->locale;
		return $instance;
	}


	/**
	 * @param string|null $locale
	 *
	 * @return self
	 */
	public function setLocale($locale): self
	{
		$this->locale = $locale;
		return $this;
	}
}
