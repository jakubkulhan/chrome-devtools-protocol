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

	/** @var string */
	public $transport;

	/** @var bool */
	public $hasResidentKey;

	/** @var bool */
	public $hasUserVerification;

	/**
	 * If set to true, tests of user presence will succeed immediately. Otherwise, they will not be resolved. Defaults to true.
	 *
	 * @var bool|null
	 */
	public $automaticPresenceSimulation;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->protocol)) {
			$instance->protocol = (string)$data->protocol;
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
		if (isset($data->automaticPresenceSimulation)) {
			$instance->automaticPresenceSimulation = (bool)$data->automaticPresenceSimulation;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->protocol !== null) {
			$data->protocol = $this->protocol;
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
		if ($this->automaticPresenceSimulation !== null) {
			$data->automaticPresenceSimulation = $this->automaticPresenceSimulation;
		}
		return $data;
	}
}
