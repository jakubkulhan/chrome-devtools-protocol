<?php

namespace ChromeDevtoolsProtocol\Model\IndexedDB;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeleteDatabaseRequestBuilder
{
	private $securityOrigin;
	private $storageKey;
	private $databaseName;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DeleteDatabaseRequest
	{
		$instance = new DeleteDatabaseRequest();
		$instance->securityOrigin = $this->securityOrigin;
		$instance->storageKey = $this->storageKey;
		if ($this->databaseName === null) {
			throw new BuilderException('Property [databaseName] is required.');
		}
		$instance->databaseName = $this->databaseName;
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
}
