<?php

namespace ChromeDevtoolsProtocol\Model\CacheStorage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestCachedResponseRequestBuilder
{
	private $cacheId;

	private $requestURL;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RequestCachedResponseRequest
	{
		$instance = new RequestCachedResponseRequest();
		if ($this->cacheId === null) {
			throw new BuilderException('Property [cacheId] is required.');
		}
		$instance->cacheId = $this->cacheId;
		if ($this->requestURL === null) {
			throw new BuilderException('Property [requestURL] is required.');
		}
		$instance->requestURL = $this->requestURL;
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
	 * @param string $requestURL
	 *
	 * @return self
	 */
	public function setRequestURL($requestURL): self
	{
		$this->requestURL = $requestURL;
		return $this;
	}
}
