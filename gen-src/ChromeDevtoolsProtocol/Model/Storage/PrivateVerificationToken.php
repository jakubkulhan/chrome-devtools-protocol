<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Details of a stored Private Verification Token.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PrivateVerificationToken implements \JsonSerializable
{
	/**
	 * Unique identifier of the token in the database.
	 *
	 * @var string
	 */
	public $id;

	/**
	 * Origin of the token issuer.
	 *
	 * @var string
	 */
	public $issuerOrigin;

	/**
	 * Public key ID used to issue the token.
	 *
	 * @var int
	 */
	public $keyId;

	/**
	 * Expiration timestamp in seconds since the epoch.
	 *
	 * @var int|float
	 */
	public $expiration;

	/**
	 * Token creation timestamp in seconds since the epoch.
	 *
	 * @var int|float
	 */
	public $creationTime;

	/**
	 * Token protocol version.
	 *
	 * @var int
	 */
	public $version;

	/**
	 * Base64-encoded serialized token.
	 *
	 * @var string
	 */
	public $token;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->id)) {
			$instance->id = (string)$data->id;
		}
		if (isset($data->issuerOrigin)) {
			$instance->issuerOrigin = (string)$data->issuerOrigin;
		}
		if (isset($data->keyId)) {
			$instance->keyId = (int)$data->keyId;
		}
		if (isset($data->expiration)) {
			$instance->expiration = $data->expiration;
		}
		if (isset($data->creationTime)) {
			$instance->creationTime = $data->creationTime;
		}
		if (isset($data->version)) {
			$instance->version = (int)$data->version;
		}
		if (isset($data->token)) {
			$instance->token = (string)$data->token;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->issuerOrigin !== null) {
			$data->issuerOrigin = $this->issuerOrigin;
		}
		if ($this->keyId !== null) {
			$data->keyId = $this->keyId;
		}
		if ($this->expiration !== null) {
			$data->expiration = $this->expiration;
		}
		if ($this->creationTime !== null) {
			$data->creationTime = $this->creationTime;
		}
		if ($this->version !== null) {
			$data->version = $this->version;
		}
		if ($this->token !== null) {
			$data->token = $this->token;
		}
		return $data;
	}
}
