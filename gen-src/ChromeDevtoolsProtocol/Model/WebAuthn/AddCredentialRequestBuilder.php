<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddCredentialRequestBuilder
{
	private $authenticatorId;

	private $credential;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): AddCredentialRequest
	{
		$instance = new AddCredentialRequest();
		if ($this->authenticatorId === null) {
			throw new BuilderException('Property [authenticatorId] is required.');
		}
		$instance->authenticatorId = $this->authenticatorId;
		if ($this->credential === null) {
			throw new BuilderException('Property [credential] is required.');
		}
		$instance->credential = $this->credential;
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
	 * @param Credential $credential
	 *
	 * @return self
	 */
	public function setCredential($credential): self
	{
		$this->credential = $credential;
		return $this;
	}
}
