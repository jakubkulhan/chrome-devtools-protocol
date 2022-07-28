<?php

namespace ChromeDevtoolsProtocol\Model\IndexedDB;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetMetadataRequestBuilder
{
	private $securityOrigin;
	private $storageKey;
	private $databaseName;
	private $objectStoreName;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetMetadataRequest
	{
		$instance = new GetMetadataRequest();
		$instance->securityOrigin = $this->securityOrigin;
		$instance->storageKey = $this->storageKey;
		if ($this->databaseName === null) {
			throw new BuilderException('Property [databaseName] is required.');
		}
		$instance->databaseName = $this->databaseName;
		if ($this->objectStoreName === null) {
			throw new BuilderException('Property [objectStoreName] is required.');
		}
		$instance->objectStoreName = $this->objectStoreName;
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
	 * @param string $databaseName
	 *
	 * @return self
	 */
	public function setDatabaseName($databaseName): self
	{
		$this->databaseName = $databaseName;
		return $this;
	}


	/**
	 * @param string $objectStoreName
	 *
	 * @return self
	 */
	public function setObjectStoreName($objectStoreName): self
	{
		$this->objectStoreName = $objectStoreName;
		return $this;
	}
}
