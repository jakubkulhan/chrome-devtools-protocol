<?php

namespace ChromeDevtoolsProtocol\Model\PWA;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LaunchRequestBuilder
{
	private $manifestId;
	private $url;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): LaunchRequest
	{
		$instance = new LaunchRequest();
		if ($this->manifestId === null) {
			throw new BuilderException('Property [manifestId] is required.');
		}
		$instance->manifestId = $this->manifestId;
		$instance->url = $this->url;
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
	 * @param string|null $url
	 *
	 * @return self
	 */
	public function setUrl($url): self
	{
		$this->url = $url;
		return $this;
	}
}
