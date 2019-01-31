<?php

namespace ChromeDevtoolsProtocol\Model\DOMStorage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetDOMStorageItemsRequestBuilder
{
	private $storageId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetDOMStorageItemsRequest
	{
		$instance = new GetDOMStorageItemsRequest();
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
