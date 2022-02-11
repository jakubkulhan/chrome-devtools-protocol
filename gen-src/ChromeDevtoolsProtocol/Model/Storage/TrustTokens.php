<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Pair of issuer origin and number of available (signed, but not used) Trust Tokens from that issuer.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TrustTokens implements \JsonSerializable
{
	/** @var string */
	public $issuerOrigin;

	/** @var int|float */
	public $count;


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
		if (isset($data->count)) {
			$instance->count = $data->count;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->issuerOrigin !== null) {
			$data->issuerOrigin = $this->issuerOrigin;
		}
		if ($this->count !== null) {
			$data->count = $this->count;
		}
		return $data;
	}
}
