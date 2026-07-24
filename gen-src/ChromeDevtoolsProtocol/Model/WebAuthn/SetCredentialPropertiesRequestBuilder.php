<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetCredentialPropertiesRequestBuilder
{
	private $authenticatorId;
	private $credentialId;
	private $backupEligibility;
	private $backupState;
	private $activeCmtgKeyIndex;
	private $generateCmtgKeyOnNextOperation;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetCredentialPropertiesRequest
	{
		$instance = new SetCredentialPropertiesRequest();
		if ($this->authenticatorId === null) {
			throw new BuilderException('Property [authenticatorId] is required.');
		}
		$instance->authenticatorId = $this->authenticatorId;
		if ($this->credentialId === null) {
			throw new BuilderException('Property [credentialId] is required.');
		}
		$instance->credentialId = $this->credentialId;
		$instance->backupEligibility = $this->backupEligibility;
		$instance->backupState = $this->backupState;
		$instance->activeCmtgKeyIndex = $this->activeCmtgKeyIndex;
		$instance->generateCmtgKeyOnNextOperation = $this->generateCmtgKeyOnNextOperation;
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


	/**
	 * @param bool|null $backupEligibility
	 *
	 * @return self
	 */
	public function setBackupEligibility($backupEligibility): self
	{
		$this->backupEligibility = $backupEligibility;
		return $this;
	}


	/**
	 * @param bool|null $backupState
	 *
	 * @return self
	 */
	public function setBackupState($backupState): self
	{
		$this->backupState = $backupState;
		return $this;
	}


	/**
	 * @param int|null $activeCmtgKeyIndex
	 *
	 * @return self
	 */
	public function setActiveCmtgKeyIndex($activeCmtgKeyIndex): self
	{
		$this->activeCmtgKeyIndex = $activeCmtgKeyIndex;
		return $this;
	}


	/**
	 * @param bool|null $generateCmtgKeyOnNextOperation
	 *
	 * @return self
	 */
	public function setGenerateCmtgKeyOnNextOperation($generateCmtgKeyOnNextOperation): self
	{
		$this->generateCmtgKeyOnNextOperation = $generateCmtgKeyOnNextOperation;
		return $this;
	}
}
