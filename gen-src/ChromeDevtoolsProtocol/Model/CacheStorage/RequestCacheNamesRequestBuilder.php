<?php

namespace ChromeDevtoolsProtocol\Model\CacheStorage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestCacheNamesRequestBuilder
{
	private $securityOrigin;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RequestCacheNamesRequest
	{
		$instance = new RequestCacheNamesRequest();
		if ($this->securityOrigin === null) {
			throw new BuilderException('Property [securityOrigin] is required.');
		}
		$instance->securityOrigin = $this->securityOrigin;
		return $instance;
	}


	/**
	 * @param string $securityOrigin
	 *
	 * @return self
	 */
	public function setSecurityOrigin($securityOrigin): self
	{
		$this->securityOrigin = $securityOrigin;
		return $this;
	}
}
