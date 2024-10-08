<?php

namespace ChromeDevtoolsProtocol\Model\FileSystem;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetDirectoryRequestBuilder
{
	private $bucketFileSystemLocator;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetDirectoryRequest
	{
		$instance = new GetDirectoryRequest();
		if ($this->bucketFileSystemLocator === null) {
			throw new BuilderException('Property [bucketFileSystemLocator] is required.');
		}
		$instance->bucketFileSystemLocator = $this->bucketFileSystemLocator;
		return $instance;
	}


	/**
	 * @param BucketFileSystemLocator $bucketFileSystemLocator
	 *
	 * @return self
	 */
	public function setBucketFileSystemLocator($bucketFileSystemLocator): self
	{
		$this->bucketFileSystemLocator = $bucketFileSystemLocator;
		return $this;
	}
}
