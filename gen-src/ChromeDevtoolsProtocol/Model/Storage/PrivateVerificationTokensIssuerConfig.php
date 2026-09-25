<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Configuration for a Private Verification Tokens issuer.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PrivateVerificationTokensIssuerConfig implements \JsonSerializable
{
	/**
	 * Origin of the token issuer.
	 *
	 * @var string
	 */
	public $issuerOrigin;

	/**
	 * Origins authorized to redeem tokens from this issuer.
	 *
	 * @var string[]
	 */
	public $redeemerOrigins;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->issuerOrigin)) {
			$instance->issuerOrigin = (string)$data->issuerOrigin;
		}
		if (isset($data->redeemerOrigins)) {
			$instance->redeemerOrigins = [];
			foreach ($data->redeemerOrigins as $item) {
				$instance->redeemerOrigins[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->issuerOrigin !== null) {
			$data->issuerOrigin = $this->issuerOrigin;
		}
		if ($this->redeemerOrigins !== null) {
			$data->redeemerOrigins = [];
			foreach ($this->redeemerOrigins as $item) {
				$data->redeemerOrigins[] = $item;
			}
		}
		return $data;
	}
}
