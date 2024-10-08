<?php

namespace ChromeDevtoolsProtocol\Model\PWA;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetOsAppStateRequestBuilder
{
	private $manifestId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetOsAppStateRequest
	{
		$instance = new GetOsAppStateRequest();
		if ($this->manifestId === null) {
			throw new BuilderException('Property [manifestId] is required.');
		}
		$instance->manifestId = $this->manifestId;
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
}
