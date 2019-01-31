<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class UnregisterRequestBuilder
{
	private $scopeURL;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): UnregisterRequest
	{
		$instance = new UnregisterRequest();
		if ($this->scopeURL === null) {
			throw new BuilderException('Property [scopeURL] is required.');
		}
		$instance->scopeURL = $this->scopeURL;
		return $instance;
	}


	/**
	 * @param string $scopeURL
	 *
	 * @return self
	 */
	public function setScopeURL($scopeURL): self
	{
		$this->scopeURL = $scopeURL;
		return $this;
	}
}
