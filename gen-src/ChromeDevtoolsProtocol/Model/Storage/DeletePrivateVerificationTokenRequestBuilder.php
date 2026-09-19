<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeletePrivateVerificationTokenRequestBuilder
{
	private $tokenId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DeletePrivateVerificationTokenRequest
	{
		$instance = new DeletePrivateVerificationTokenRequest();
		if ($this->tokenId === null) {
			throw new BuilderException('Property [tokenId] is required.');
		}
		$instance->tokenId = $this->tokenId;
		return $instance;
	}


	/**
	 * @param string $tokenId
	 *
	 * @return self
	 */
	public function setTokenId($tokenId): self
	{
		$this->tokenId = $tokenId;
		return $this;
	}
}
