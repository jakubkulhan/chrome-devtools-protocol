<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

/**
 * Response to WebAuthn.getCredentials command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetCredentialsResponse implements \JsonSerializable
{
	/** @var Credential[] */
	public $credentials;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->credentials)) {
			$instance->credentials = [];
			foreach ($data->credentials as $item) {
				$instance->credentials[] = Credential::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->credentials !== null) {
			$data->credentials = [];
			foreach ($this->credentials as $item) {
				$data->credentials[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
