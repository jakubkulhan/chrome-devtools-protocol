<?php

namespace ChromeDevtoolsProtocol\Model\FedCm;

/**
 * Corresponds to IdentityRequestAccount
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Account implements \JsonSerializable
{
	/** @var string */
	public $accountId;

	/** @var string */
	public $email;

	/** @var string */
	public $name;

	/** @var string */
	public $givenName;

	/** @var string */
	public $pictureUrl;

	/** @var string */
	public $idpConfigUrl;

	/** @var string */
	public $idpSigninUrl;

	/** @var string */
	public $loginState;

	/**
	 * These two are only set if the loginState is signUp
	 *
	 * @var string|null
	 */
	public $termsOfServiceUrl;

	/** @var string|null */
	public $privacyPolicyUrl;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->accountId)) {
			$instance->accountId = (string)$data->accountId;
		}
		if (isset($data->email)) {
			$instance->email = (string)$data->email;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->givenName)) {
			$instance->givenName = (string)$data->givenName;
		}
		if (isset($data->pictureUrl)) {
			$instance->pictureUrl = (string)$data->pictureUrl;
		}
		if (isset($data->idpConfigUrl)) {
			$instance->idpConfigUrl = (string)$data->idpConfigUrl;
		}
		if (isset($data->idpSigninUrl)) {
			$instance->idpSigninUrl = (string)$data->idpSigninUrl;
		}
		if (isset($data->loginState)) {
			$instance->loginState = (string)$data->loginState;
		}
		if (isset($data->termsOfServiceUrl)) {
			$instance->termsOfServiceUrl = (string)$data->termsOfServiceUrl;
		}
		if (isset($data->privacyPolicyUrl)) {
			$instance->privacyPolicyUrl = (string)$data->privacyPolicyUrl;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->accountId !== null) {
			$data->accountId = $this->accountId;
		}
		if ($this->email !== null) {
			$data->email = $this->email;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->givenName !== null) {
			$data->givenName = $this->givenName;
		}
		if ($this->pictureUrl !== null) {
			$data->pictureUrl = $this->pictureUrl;
		}
		if ($this->idpConfigUrl !== null) {
			$data->idpConfigUrl = $this->idpConfigUrl;
		}
		if ($this->idpSigninUrl !== null) {
			$data->idpSigninUrl = $this->idpSigninUrl;
		}
		if ($this->loginState !== null) {
			$data->loginState = $this->loginState;
		}
		if ($this->termsOfServiceUrl !== null) {
			$data->termsOfServiceUrl = $this->termsOfServiceUrl;
		}
		if ($this->privacyPolicyUrl !== null) {
			$data->privacyPolicyUrl = $this->privacyPolicyUrl;
		}
		return $data;
	}
}
