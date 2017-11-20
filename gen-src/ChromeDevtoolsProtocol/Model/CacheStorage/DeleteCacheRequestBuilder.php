<?php
namespace ChromeDevtoolsProtocol\Model\CacheStorage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeleteCacheRequestBuilder
{
	private $cacheId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DeleteCacheRequest
	{
		$instance = new DeleteCacheRequest();
		if ($this->cacheId === null) {
			throw new BuilderException('Property [cacheId] is required.');
		}
		$instance->cacheId = $this->cacheId;
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
}
