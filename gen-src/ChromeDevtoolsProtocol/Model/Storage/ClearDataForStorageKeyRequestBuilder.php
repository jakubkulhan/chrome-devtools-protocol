<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ClearDataForStorageKeyRequestBuilder
{
	private $storageKey;
	private $storageTypes;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ClearDataForStorageKeyRequest
	{
		$instance = new ClearDataForStorageKeyRequest();
		if ($this->storageKey === null) {
			throw new BuilderException('Property [storageKey] is required.');
		}
		$instance->storageKey = $this->storageKey;
		if ($this->storageTypes === null) {
			throw new BuilderException('Property [storageTypes] is required.');
		}
		$instance->storageTypes = $this->storageTypes;
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


	/**
	 * @param string $storageTypes
	 *
	 * @return self
	 */
	public function setStorageTypes($storageTypes): self
	{
		$this->storageTypes = $storageTypes;
		return $this;
	}
}
