<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddVirtualAuthenticatorRequestBuilder
{
	private $options;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): AddVirtualAuthenticatorRequest
	{
		$instance = new AddVirtualAuthenticatorRequest();
		if ($this->options === null) {
			throw new BuilderException('Property [options] is required.');
		}
		$instance->options = $this->options;
		return $instance;
	}


	/**
	 * @param VirtualAuthenticatorOptions $options
	 *
	 * @return self
	 */
	public function setOptions($options): self
	{
		$this->options = $options;
		return $this;
	}
}
