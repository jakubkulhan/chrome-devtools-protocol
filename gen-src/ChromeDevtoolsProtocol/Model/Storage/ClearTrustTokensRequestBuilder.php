<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ClearTrustTokensRequestBuilder
{
	private $issuerOrigin;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ClearTrustTokensRequest
	{
		$instance = new ClearTrustTokensRequest();
		if ($this->issuerOrigin === null) {
			throw new BuilderException('Property [issuerOrigin] is required.');
		}
		$instance->issuerOrigin = $this->issuerOrigin;
		return $instance;
	}


	/**
	 * @param string $issuerOrigin
	 *
	 * @return self
	 */
	public function setIssuerOrigin($issuerOrigin): self
	{
		$this->issuerOrigin = $issuerOrigin;
		return $this;
	}
}
