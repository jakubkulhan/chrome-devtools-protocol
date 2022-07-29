<?php

namespace ChromeDevtoolsProtocol\Model\IndexedDB;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestDataRequestBuilder
{
	private $securityOrigin;
	private $storageKey;
	private $databaseName;
	private $objectStoreName;
	private $indexName;
	private $skipCount;
	private $pageSize;
	private $keyRange;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RequestDataRequest
	{
		$instance = new RequestDataRequest();
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
		if ($this->indexName === null) {
			throw new BuilderException('Property [indexName] is required.');
		}
		$instance->indexName = $this->indexName;
		if ($this->skipCount === null) {
			throw new BuilderException('Property [skipCount] is required.');
		}
		$instance->skipCount = $this->skipCount;
		if ($this->pageSize === null) {
			throw new BuilderException('Property [pageSize] is required.');
		}
		$instance->pageSize = $this->pageSize;
		$instance->keyRange = $this->keyRange;
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


	/**
	 * @param string $indexName
	 *
	 * @return self
	 */
	public function setIndexName($indexName): self
	{
		$this->indexName = $indexName;
		return $this;
	}


	/**
	 * @param int $skipCount
	 *
	 * @return self
	 */
	public function setSkipCount($skipCount): self
	{
		$this->skipCount = $skipCount;
		return $this;
	}


	/**
	 * @param int $pageSize
	 *
	 * @return self
	 */
	public function setPageSize($pageSize): self
	{
		$this->pageSize = $pageSize;
		return $this;
	}


	/**
	 * @param KeyRange|null $keyRange
	 *
	 * @return self
	 */
	public function setKeyRange($keyRange): self
	{
		$this->keyRange = $keyRange;
		return $this;
	}
}
