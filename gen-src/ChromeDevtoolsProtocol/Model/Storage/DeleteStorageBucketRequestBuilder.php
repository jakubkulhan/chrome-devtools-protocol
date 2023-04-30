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
	private $bucket;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DeleteStorageBucketRequest
	{
		$instance = new DeleteStorageBucketRequest();
		if ($this->bucket === null) {
			throw new BuilderException('Property [bucket] is required.');
		}
		$instance->bucket = $this->bucket;
		return $instance;
	}


	/**
	 * @param StorageBucket $bucket
	 *
	 * @return self
	 */
	public function setBucket($bucket): self
	{
		$this->bucket = $bucket;
		return $this;
	}
}
