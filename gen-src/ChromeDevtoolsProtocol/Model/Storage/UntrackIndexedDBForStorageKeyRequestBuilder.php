<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class UntrackIndexedDBForStorageKeyRequestBuilder
{
	private $storageKey;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): UntrackIndexedDBForStorageKeyRequest
	{
		$instance = new UntrackIndexedDBForStorageKeyRequest();
		if ($this->storageKey === null) {
			throw new BuilderException('Property [storageKey] is required.');
		}
		$instance->storageKey = $this->storageKey;
		return $instance;
	}


	/**
	 * @param string $storageKey
	 *
	 * @return self
	 */
	public function setStorageKey($storageKey): self
	{
		$this->storageKey = $storageKey;
		return $this;
	}
}
