<?php

namespace ChromeDevtoolsProtocol\Model\CacheStorage;

use ChromeDevtoolsProtocol\Model\Storage\StorageBucket;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestCacheNamesRequestBuilder
{
	private $securityOrigin;
	private $storageKey;
	private $storageBucket;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RequestCacheNamesRequest
	{
		$instance = new RequestCacheNamesRequest();
		$instance->securityOrigin = $this->securityOrigin;
		$instance->storageKey = $this->storageKey;
		$instance->storageBucket = $this->storageBucket;
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


	/**
	 * @param StorageBucket|null $storageBucket
	 *
	 * @return self
	 */
	public function setStorageBucket($storageBucket): self
	{
		$this->storageBucket = $storageBucket;
		return $this;
	}
}
