<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

/**
 * Triggered when a credential is added to an authenticator.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CredentialAddedEvent implements \JsonSerializable
{
	/** @var string */
	public $authenticatorId;

	/** @var Credential */
	public $credential;


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
		if (isset($data->credential)) {
			$instance->credential = Credential::fromJson($data->credential);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->authenticatorId !== null) {
			$data->authenticatorId = $this->authenticatorId;
		}
		if ($this->credential !== null) {
			$data->credential = $this->credential->jsonSerialize();
		}
		return $data;
	}
}
