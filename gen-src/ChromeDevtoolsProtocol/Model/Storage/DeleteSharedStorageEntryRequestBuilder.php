<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeleteSharedStorageEntryRequestBuilder
{
	private $ownerOrigin;
	private $key;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DeleteSharedStorageEntryRequest
	{
		$instance = new DeleteSharedStorageEntryRequest();
		if ($this->ownerOrigin === null) {
			throw new BuilderException('Property [ownerOrigin] is required.');
		}
		$instance->ownerOrigin = $this->ownerOrigin;
		if ($this->key === null) {
			throw new BuilderException('Property [key] is required.');
		}
		$instance->key = $this->key;
		return $instance;
	}


	/**
	 * @param string $ownerOrigin
	 *
	 * @return self
	 */
	public function setOwnerOrigin($ownerOrigin): self
	{
		$this->ownerOrigin = $ownerOrigin;
		return $this;
	}


	/**
	 * @param string $key
	 *
	 * @return self
	 */
	public function setKey($key): self
	{
		$this->key = $key;
		return $this;
	}
}
