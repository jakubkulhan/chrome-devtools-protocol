<?php

namespace ChromeDevtoolsProtocol\Model\PWA;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InstallRequestBuilder
{
	private $manifestId;
	private $installUrlOrBundleUrl;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): InstallRequest
	{
		$instance = new InstallRequest();
		if ($this->manifestId === null) {
			throw new BuilderException('Property [manifestId] is required.');
		}
		$instance->manifestId = $this->manifestId;
		$instance->installUrlOrBundleUrl = $this->installUrlOrBundleUrl;
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
	 * @param string|null $installUrlOrBundleUrl
	 *
	 * @return self
	 */
	public function setInstallUrlOrBundleUrl($installUrlOrBundleUrl): self
	{
		$this->installUrlOrBundleUrl = $installUrlOrBundleUrl;
		return $this;
	}
}
