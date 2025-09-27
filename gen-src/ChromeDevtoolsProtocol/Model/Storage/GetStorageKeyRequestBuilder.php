<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetStorageKeyRequestBuilder
{
	private $frameId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetStorageKeyRequest
	{
		$instance = new GetStorageKeyRequest();
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
