<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

/**
 * Request for WebAuthn.getCredentials command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetCredentialsRequest implements \JsonSerializable
{
	/** @var string */
	public $authenticatorId;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->authenticatorId !== null) {
			$data->authenticatorId = $this->authenticatorId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetCredentialsRequestBuilder
	 */
	public static function builder(): GetCredentialsRequestBuilder
	{
		return new GetCredentialsRequestBuilder();
	}
}
