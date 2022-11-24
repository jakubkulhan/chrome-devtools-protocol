<?php

namespace ChromeDevtoolsProtocol\Model\CacheStorage;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestCacheNamesRequestBuilder
{
	private $securityOrigin;
	private $storageKey;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RequestCacheNamesRequest
	{
		$instance = new RequestCacheNamesRequest();
		$instance->securityOrigin = $this->securityOrigin;
		$instance->storageKey = $this->storageKey;
		return $instance;
	}


	/**
	 * @param string|null $securityOrigin
	 *
	 * @return self
	 */
	public function setSecurityOrigin($securityOrigin): self
	{
		$this->securityOrigin = $securityOrigin;
		return $this;
	}


	/**
	 * @param string|null $storageKey
	 *
	 * @return self
	 */
	public function setStorageKey($storageKey): self
	{
		$this->storageKey = $storageKey;
		return $this;
	}
}
