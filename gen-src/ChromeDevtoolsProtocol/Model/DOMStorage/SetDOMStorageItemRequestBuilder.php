<?php

namespace ChromeDevtoolsProtocol\Model\DOMStorage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDOMStorageItemRequestBuilder
{
	private $storageId;

	private $key;

	private $value;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetDOMStorageItemRequest
	{
		$instance = new SetDOMStorageItemRequest();
		if ($this->storageId === null) {
			throw new BuilderException('Property [storageId] is required.');
		}
		$instance->storageId = $this->storageId;
		if ($this->key === null) {
			throw new BuilderException('Property [key] is required.');
		}
		$instance->key = $this->key;
		if ($this->value === null) {
			throw new BuilderException('Property [value] is required.');
		}
		$instance->value = $this->value;
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


	/**
	 * @param string $value
	 *
	 * @return self
	 */
	public function setValue($value): self
	{
		$this->value = $value;
		return $this;
	}
}
