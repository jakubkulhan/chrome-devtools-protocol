<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

/**
 * Response to WebAuthn.addVirtualAuthenticator command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddVirtualAuthenticatorResponse implements \JsonSerializable
{
	/** @var string */
	public $authenticatorId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->authenticatorId)) {
			$instance->authenticatorId = (string)$data->authenticatorId;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->authenticatorId !== null) {
			$data->authenticatorId = $this->authenticatorId;
		}
		return $data;
	}
}
