<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

/**
 * Named type WebAuthn.VirtualAuthenticatorOptions.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class VirtualAuthenticatorOptions implements \JsonSerializable
{
	/** @var string */
	public $protocol;

	/**
	 * Defaults to ctap2_0. Ignored if |protocol| == u2f.
	 *
	 * @var string
	 */
	public $ctap2Version;

	/** @var string */
	public $transport;

	/**
	 * Defaults to false.
	 *
	 * @var bool|null
	 */
	public $hasResidentKey;

	/**
	 * Defaults to false.
	 *
	 * @var bool|null
	 */
	public $hasUserVerification;

	/**
	 * If set to true, the authenticator will support the largeBlob extension. https://w3c.github.io/webauthn#largeBlob Defaults to false.
	 *
	 * @var bool|null
	 */
	public $hasLargeBlob;

	/**
	 * If set to true, the authenticator will support the credBlob extension. https://fidoalliance.org/specs/fido-v2.1-rd-20201208/fido-client-to-authenticator-protocol-v2.1-rd-20201208.html#sctn-credBlob-extension Defaults to false.
	 *
	 * @var bool|null
	 */
	public $hasCredBlob;

	/**
	 * If set to true, the authenticator will support the minPinLength extension. https://fidoalliance.org/specs/fido-v2.1-ps-20210615/fido-client-to-authenticator-protocol-v2.1-ps-20210615.html#sctn-minpinlength-extension Defaults to false.
	 *
	 * @var bool|null
	 */
	public $hasMinPinLength;

	/**
	 * If set to true, the authenticator will support the prf extension. https://w3c.github.io/webauthn/#prf-extension Defaults to false.
	 *
	 * @var bool|null
	 */
	public $hasPrf;

	/**
	 * If set to true, tests of user presence will succeed immediately. Otherwise, they will not be resolved. Defaults to true.
	 *
	 * @var bool|null
	 */
	public $automaticPresenceSimulation;

	/**
	 * Sets whether User Verification succeeds or fails for an authenticator. Defaults to false.
	 *
	 * @var bool|null
	 */
	public $isUserVerified;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->protocol)) {
			$instance->protocol = (string)$data->protocol;
		}
		if (isset($data->ctap2Version)) {
			$instance->ctap2Version = (string)$data->ctap2Version;
		}
		if (isset($data->transport)) {
			$instance->transport = (string)$data->transport;
		}
		if (isset($data->hasResidentKey)) {
			$instance->hasResidentKey = (bool)$data->hasResidentKey;
		}
		if (isset($data->hasUserVerification)) {
			$instance->hasUserVerification = (bool)$data->hasUserVerification;
		}
		if (isset($data->hasLargeBlob)) {
			$instance->hasLargeBlob = (bool)$data->hasLargeBlob;
		}
		if (isset($data->hasCredBlob)) {
			$instance->hasCredBlob = (bool)$data->hasCredBlob;
		}
		if (isset($data->hasMinPinLength)) {
			$instance->hasMinPinLength = (bool)$data->hasMinPinLength;
		}
		if (isset($data->hasPrf)) {
			$instance->hasPrf = (bool)$data->hasPrf;
		}
		if (isset($data->automaticPresenceSimulation)) {
			$instance->automaticPresenceSimulation = (bool)$data->automaticPresenceSimulation;
		}
		if (isset($data->isUserVerified)) {
			$instance->isUserVerified = (bool)$data->isUserVerified;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->protocol !== null) {
			$data->protocol = $this->protocol;
		}
		if ($this->ctap2Version !== null) {
			$data->ctap2Version = $this->ctap2Version;
		}
		if ($this->transport !== null) {
			$data->transport = $this->transport;
		}
		if ($this->hasResidentKey !== null) {
			$data->hasResidentKey = $this->hasResidentKey;
		}
		if ($this->hasUserVerification !== null) {
			$data->hasUserVerification = $this->hasUserVerification;
		}
		if ($this->hasLargeBlob !== null) {
			$data->hasLargeBlob = $this->hasLargeBlob;
		}
		if ($this->hasCredBlob !== null) {
			$data->hasCredBlob = $this->hasCredBlob;
		}
		if ($this->hasMinPinLength !== null) {
			$data->hasMinPinLength = $this->hasMinPinLength;
		}
		if ($this->hasPrf !== null) {
			$data->hasPrf = $this->hasPrf;
		}
		if ($this->automaticPresenceSimulation !== null) {
			$data->automaticPresenceSimulation = $this->automaticPresenceSimulation;
		}
		if ($this->isUserVerified !== null) {
			$data->isUserVerified = $this->isUserVerified;
		}
		return $data;
	}
}
