<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeleteStorageBucketRequestBuilder
{
	private $storageKey;
	private $bucketName;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DeleteStorageBucketRequest
	{
		$instance = new DeleteStorageBucketRequest();
		if ($this->storageKey === null) {
			throw new BuilderException('Property [storageKey] is required.');
		}
		$instance->storageKey = $this->storageKey;
		if ($this->bucketName === null) {
			throw new BuilderException('Property [bucketName] is required.');
		}
		$instance->bucketName = $this->bucketName;
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
	 * @param string $bucketName
	 *
	 * @return self
	 */
	public function setBucketName($bucketName): self
	{
		$this->bucketName = $bucketName;
		return $this;
	}
}
