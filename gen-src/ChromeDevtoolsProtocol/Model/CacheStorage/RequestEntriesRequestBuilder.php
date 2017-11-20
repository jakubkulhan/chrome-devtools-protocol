<?php
namespace ChromeDevtoolsProtocol\Model\CacheStorage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestEntriesRequestBuilder
{
	private $cacheId;

	private $skipCount;

	private $pageSize;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RequestEntriesRequest
	{
		$instance = new RequestEntriesRequest();
		if ($this->cacheId === null) {
			throw new BuilderException('Property [cacheId] is required.');
		}
		$instance->cacheId = $this->cacheId;
		if ($this->skipCount === null) {
			throw new BuilderException('Property [skipCount] is required.');
		}
		$instance->skipCount = $this->skipCount;
		if ($this->pageSize === null) {
			throw new BuilderException('Property [pageSize] is required.');
		}
		$instance->pageSize = $this->pageSize;
		return $instance;
	}


	/**
	 * @param string $cacheId
	 *
	 * @return self
	 */
	public function setCacheId($cacheId): self
	{
		$this->cacheId = $cacheId;
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
}
