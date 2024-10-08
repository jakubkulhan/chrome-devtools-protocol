<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetStorageKeyForFrameRequestBuilder
{
	private $frameId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetStorageKeyForFrameRequest
	{
		$instance = new GetStorageKeyForFrameRequest();
		if ($this->frameId === null) {
			throw new BuilderException('Property [frameId] is required.');
		}
		$instance->frameId = $this->frameId;
		return $instance;
	}


	/**
	 * @param string $frameId
	 *
	 * @return self
	 */
	public function setFrameId($frameId): self
	{
		$this->frameId = $frameId;
		return $this;
	}
}
