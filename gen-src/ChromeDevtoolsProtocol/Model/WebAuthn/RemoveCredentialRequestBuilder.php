<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoveCredentialRequestBuilder
{
	private $authenticatorId;
	private $credentialId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RemoveCredentialRequest
	{
		$instance = new RemoveCredentialRequest();
		if ($this->authenticatorId === null) {
			throw new BuilderException('Property [authenticatorId] is required.');
		}
		$instance->authenticatorId = $this->authenticatorId;
		if ($this->credentialId === null) {
			throw new BuilderException('Property [credentialId] is required.');
		}
		$instance->credentialId = $this->credentialId;
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
	 * @param string $credentialId
	 *
	 * @return self
	 */
	public function setCredentialId($credentialId): self
	{
		$this->credentialId = $credentialId;
		return $this;
	}
}
