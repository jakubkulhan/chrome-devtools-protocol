<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

/**
 * Named type WebAuthn.Credential.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Credential implements \JsonSerializable
{
	/** @var string */
	public $credentialId;

	/** @var bool */
	public $isResidentCredential;

	/**
	 * Relying Party ID the credential is scoped to. Must be set when adding a credential.
	 *
	 * @var string|null
	 */
	public $rpId;

	/**
	 * The ECDSA P-256 private key in PKCS#8 format. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string
	 */
	public $privateKey;

	/**
	 * An opaque byte sequence with a maximum size of 64 bytes mapping the credential to a specific user. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string|null
	 */
	public $userHandle;

	/**
	 * Signature counter. This is incremented by one for each successful assertion. See https://w3c.github.io/webauthn/#signature-counter
	 *
	 * @var int
	 */
	public $signCount;

	/**
	 * The large blob associated with the credential. See https://w3c.github.io/webauthn/#sctn-large-blob-extension (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string|null
	 */
	public $largeBlob;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->credentialId)) {
			$instance->credentialId = (string)$data->credentialId;
		}
		if (isset($data->isResidentCredential)) {
			$instance->isResidentCredential = (bool)$data->isResidentCredential;
		}
		if (isset($data->rpId)) {
			$instance->rpId = (string)$data->rpId;
		}
		if (isset($data->privateKey)) {
			$instance->privateKey = (string)$data->privateKey;
		}
		if (isset($data->userHandle)) {
			$instance->userHandle = (string)$data->userHandle;
		}
		if (isset($data->signCount)) {
			$instance->signCount = (int)$data->signCount;
		}
		if (isset($data->largeBlob)) {
			$instance->largeBlob = (string)$data->largeBlob;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->credentialId !== null) {
			$data->credentialId = $this->credentialId;
		}
		if ($this->isResidentCredential !== null) {
			$data->isResidentCredential = $this->isResidentCredential;
		}
		if ($this->rpId !== null) {
			$data->rpId = $this->rpId;
		}
		if ($this->privateKey !== null) {
			$data->privateKey = $this->privateKey;
		}
		if ($this->userHandle !== null) {
			$data->userHandle = $this->userHandle;
		}
		if ($this->signCount !== null) {
			$data->signCount = $this->signCount;
		}
		if ($this->largeBlob !== null) {
			$data->largeBlob = $this->largeBlob;
		}
		return $data;
	}
}
