<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

/**
 * Request for WebAuthn.setResponseOverrideBits command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetResponseOverrideBitsRequest implements \JsonSerializable
{
	/** @var string */
	public $authenticatorId;

	/**
	 * If isBogusSignature is set, overrides the signature in the authenticator response to be zero. Defaults to false.
	 *
	 * @var bool|null
	 */
	public $isBogusSignature;

	/**
	 * If isBadUV is set, overrides the UV bit in the flags in the authenticator response to be zero. Defaults to false.
	 *
	 * @var bool|null
	 */
	public $isBadUV;

	/**
	 * If isBadUP is set, overrides the UP bit in the flags in the authenticator response to be zero. Defaults to false.
	 *
	 * @var bool|null
	 */
	public $isBadUP;


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
		if (isset($data->isBogusSignature)) {
			$instance->isBogusSignature = (bool)$data->isBogusSignature;
		}
		if (isset($data->isBadUV)) {
			$instance->isBadUV = (bool)$data->isBadUV;
		}
		if (isset($data->isBadUP)) {
			$instance->isBadUP = (bool)$data->isBadUP;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->authenticatorId !== null) {
			$data->authenticatorId = $this->authenticatorId;
		}
		if ($this->isBogusSignature !== null) {
			$data->isBogusSignature = $this->isBogusSignature;
		}
		if ($this->isBadUV !== null) {
			$data->isBadUV = $this->isBadUV;
		}
		if ($this->isBadUP !== null) {
			$data->isBadUP = $this->isBadUP;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetResponseOverrideBitsRequestBuilder
	 */
	public static function builder(): SetResponseOverrideBitsRequestBuilder
	{
		return new SetResponseOverrideBitsRequestBuilder();
	}
}
