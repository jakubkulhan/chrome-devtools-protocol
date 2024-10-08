<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

/**
 * Request for WebAuthn.removeCredential command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoveCredentialRequest implements \JsonSerializable
{
	/** @var string */
	public $authenticatorId;

	/** @var string */
	public $credentialId;


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
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return RemoveCredentialRequestBuilder
	 */
	public static function builder(): RemoveCredentialRequestBuilder
	{
		return new RemoveCredentialRequestBuilder();
	}
}
