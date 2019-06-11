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

	/**
	 * SHA-256 hash of the Relying Party ID the credential is scoped to. Must be 32 bytes long. See https://w3c.github.io/webauthn/#rpidhash
	 *
	 * @var string
	 */
	public $rpIdHash;

	/**
	 * The private key in PKCS#8 format.
	 *
	 * @var string
	 */
	public $privateKey;

	/**
	 * Signature counter. This is incremented by one for each successful assertion. See https://w3c.github.io/webauthn/#signature-counter
	 *
	 * @var int
	 */
	public $signCount;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->credentialId)) {
			$instance->credentialId = (string)$data->credentialId;
		}
		if (isset($data->rpIdHash)) {
			$instance->rpIdHash = (string)$data->rpIdHash;
		}
		if (isset($data->privateKey)) {
			$instance->privateKey = (string)$data->privateKey;
		}
		if (isset($data->signCount)) {
			$instance->signCount = (int)$data->signCount;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->credentialId !== null) {
			$data->credentialId = $this->credentialId;
		}
		if ($this->rpIdHash !== null) {
			$data->rpIdHash = $this->rpIdHash;
		}
		if ($this->privateKey !== null) {
			$data->privateKey = $this->privateKey;
		}
		if ($this->signCount !== null) {
			$data->signCount = $this->signCount;
		}
		return $data;
	}
}
