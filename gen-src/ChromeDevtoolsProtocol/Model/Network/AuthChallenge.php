<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Authorization challenge for HTTP status code 401 or 407.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AuthChallenge implements \JsonSerializable
{
	/**
	 * Source of the authentication challenge.
	 *
	 * @var string|null
	 */
	public $source;

	/**
	 * Origin of the challenger.
	 *
	 * @var string
	 */
	public $origin;

	/**
	 * The authentication scheme used, such as basic or digest
	 *
	 * @var string
	 */
	public $scheme;

	/**
	 * The realm of the challenge. May be empty.
	 *
	 * @var string
	 */
	public $realm;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->source)) {
			$instance->source = (string)$data->source;
		}
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		if (isset($data->scheme)) {
			$instance->scheme = (string)$data->scheme;
		}
		if (isset($data->realm)) {
			$instance->realm = (string)$data->realm;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->source !== null) {
			$data->source = $this->source;
		}
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		if ($this->scheme !== null) {
			$data->scheme = $this->scheme;
		}
		if ($this->realm !== null) {
			$data->realm = $this->realm;
		}
		return $data;
	}
}
