<?php

namespace ChromeDevtoolsProtocol\Model\WebAuthn;

/**
 * Request for WebAuthn.setUserVerified command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetUserVerifiedRequest implements \JsonSerializable
{
	/** @var string */
	public $authenticatorId;

	/** @var bool */
	public $isUserVerified;


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
		if (isset($data->isUserVerified)) {
			$instance->isUserVerified = (bool)$data->isUserVerified;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->authenticatorId !== null) {
			$data->authenticatorId = $this->authenticatorId;
		}
		if ($this->isUserVerified !== null) {
			$data->isUserVerified = $this->isUserVerified;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetUserVerifiedRequestBuilder
	 */
	public static function builder(): SetUserVerifiedRequestBuilder
	{
		return new SetUserVerifiedRequestBuilder();
	}
}
