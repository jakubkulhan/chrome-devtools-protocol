<?php

namespace ChromeDevtoolsProtocol\Model\CacheStorage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeleteEntryRequestBuilder
{
	private $cacheId;
	private $request;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DeleteEntryRequest
	{
		$instance = new DeleteEntryRequest();
		if ($this->cacheId === null) {
			throw new BuilderException('Property [cacheId] is required.');
		}
		$instance->cacheId = $this->cacheId;
		if ($this->request === null) {
			throw new BuilderException('Property [request] is required.');
		}
		$instance->request = $this->request;
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
	 * @param string $request
	 *
	 * @return self
	 */
	public function setRequest($request): self
	{
		$this->request = $request;
		return $this;
	}
}
