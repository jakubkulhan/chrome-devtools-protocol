<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

/**
 * Response to WebAuthn.getCredential command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetCredentialResponse implements \JsonSerializable
{
	/** @var Credential */
	public $credential;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->credential)) {
			$instance->credential = Credential::fromJson($data->credential);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->credential !== null) {
			$data->credential = $this->credential->jsonSerialize();
		}
		return $data;
	}
}
