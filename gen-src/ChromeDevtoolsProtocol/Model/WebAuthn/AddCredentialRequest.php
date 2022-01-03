<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

/**
 * Request for WebAuthn.addCredential command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddCredentialRequest implements \JsonSerializable
{
	/** @var string */
	public $authenticatorId;

	/** @var Credential */
	public $credential;


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


	public function jsonSerialize(): mixed
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


	/**
	 * Create new instance using builder.
	 *
	 * @return AddCredentialRequestBuilder
	 */
	public static function builder(): AddCredentialRequestBuilder
	{
		return new AddCredentialRequestBuilder();
	}
}
