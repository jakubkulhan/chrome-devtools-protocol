<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

/**
 * Request for WebAuthn.setCredentialProperties command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetCredentialPropertiesRequest implements \JsonSerializable
{
	/** @var string */
	public $authenticatorId;

	/** @var string */
	public $credentialId;

	/** @var bool|null */
	public $backupEligibility;

	/** @var bool|null */
	public $backupState;

	/** @var int|null */
	public $activeCmtgKeyIndex;

	/** @var bool|null */
	public $generateCmtgKeyOnNextOperation;

	/**
	 * Must be equal to or greater than -1. If -1, the signature counter is removed from the credential, and every assertion operation will report a value of 0. See https://w3c.github.io/webauthn/#signature-counter
	 *
	 * @var int|null
	 */
	public $signCount;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->authenticatorId)) {
			$instance->authenticatorId = (string)$data->authenticatorId;
		}
		if (isset($data->credentialId)) {
			$instance->credentialId = (string)$data->credentialId;
		}
		if (isset($data->backupEligibility)) {
			$instance->backupEligibility = (bool)$data->backupEligibility;
		}
		if (isset($data->backupState)) {
			$instance->backupState = (bool)$data->backupState;
		}
		if (isset($data->activeCmtgKeyIndex)) {
			$instance->activeCmtgKeyIndex = (int)$data->activeCmtgKeyIndex;
		}
		if (isset($data->generateCmtgKeyOnNextOperation)) {
			$instance->generateCmtgKeyOnNextOperation = (bool)$data->generateCmtgKeyOnNextOperation;
		}
		if (isset($data->signCount)) {
			$instance->signCount = (int)$data->signCount;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->authenticatorId !== null) {
			$data->authenticatorId = $this->authenticatorId;
		}
		if ($this->credentialId !== null) {
			$data->credentialId = $this->credentialId;
		}
		if ($this->backupEligibility !== null) {
			$data->backupEligibility = $this->backupEligibility;
		}
		if ($this->backupState !== null) {
			$data->backupState = $this->backupState;
		}
		if ($this->activeCmtgKeyIndex !== null) {
			$data->activeCmtgKeyIndex = $this->activeCmtgKeyIndex;
		}
		if ($this->generateCmtgKeyOnNextOperation !== null) {
			$data->generateCmtgKeyOnNextOperation = $this->generateCmtgKeyOnNextOperation;
		}
		if ($this->signCount !== null) {
			$data->signCount = $this->signCount;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetCredentialPropertiesRequestBuilder
	 */
	public static function builder(): SetCredentialPropertiesRequestBuilder
	{
		return new SetCredentialPropertiesRequestBuilder();
	}
}
