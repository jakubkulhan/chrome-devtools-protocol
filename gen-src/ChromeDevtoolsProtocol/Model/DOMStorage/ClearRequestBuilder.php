<?php

namespace ChromeDevtoolsProtocol\Model\DOMStorage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ClearRequestBuilder
{
	private $storageId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ClearRequest
	{
		$instance = new ClearRequest();
		if ($this->storageId === null) {
			throw new BuilderException('Property [storageId] is required.');
		}
		$instance->storageId = $this->storageId;
		return $instance;
	}


	/**
	 * @param StorageId $storageId
	 *
	 * @return self
	 */
	public function setStorageId($storageId): self
	{
		$this->storageId = $storageId;
		return $this;
	}
}
