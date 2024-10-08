<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAppManifestRequestBuilder
{
	private $manifestId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetAppManifestRequest
	{
		$instance = new GetAppManifestRequest();
		$instance->manifestId = $this->manifestId;
		return $instance;
	}


	/**
	 * @param string|null $manifestId
	 *
	 * @return self
	 */
	public function setManifestId($manifestId): self
	{
		$this->manifestId = $manifestId;
		return $this;
	}
}
