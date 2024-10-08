<?php

namespace ChromeDevtoolsProtocol\Model\PWA;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LaunchFilesInAppRequestBuilder
{
	private $manifestId;
	private $files;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): LaunchFilesInAppRequest
	{
		$instance = new LaunchFilesInAppRequest();
		if ($this->manifestId === null) {
			throw new BuilderException('Property [manifestId] is required.');
		}
		$instance->manifestId = $this->manifestId;
		if ($this->files === null) {
			throw new BuilderException('Property [files] is required.');
		}
		$instance->files = $this->files;
		return $instance;
	}


	/**
	 * @param string $manifestId
	 *
	 * @return self
	 */
	public function setManifestId($manifestId): self
	{
		$this->manifestId = $manifestId;
		return $this;
	}


	/**
	 * @param string[] $files
	 *
	 * @return self
	 */
	public function setFiles($files): self
	{
		$this->files = $files;
		return $this;
	}
}
