<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetUserVerifiedRequestBuilder
{
	private $authenticatorId;
	private $isUserVerified;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetUserVerifiedRequest
	{
		$instance = new SetUserVerifiedRequest();
		if ($this->authenticatorId === null) {
			throw new BuilderException('Property [authenticatorId] is required.');
		}
		$instance->authenticatorId = $this->authenticatorId;
		if ($this->isUserVerified === null) {
			throw new BuilderException('Property [isUserVerified] is required.');
		}
		$instance->isUserVerified = $this->isUserVerified;
		return $instance;
	}


	/**
	 * @param string $authenticatorId
	 *
	 * @return self
	 */
	public function setAuthenticatorId($authenticatorId): self
	{
		$this->authenticatorId = $authenticatorId;
		return $this;
	}


	/**
	 * @param bool $isUserVerified
	 *
	 * @return self
	 */
	public function setIsUserVerified($isUserVerified): self
	{
		$this->isUserVerified = $isUserVerified;
		return $this;
	}
}
