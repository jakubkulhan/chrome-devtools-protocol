<?php

namespace ChromeDevtoolsProtocol\Model\Fetch;

/**
 * Response to an AuthChallenge.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AuthChallengeResponse implements \JsonSerializable
{
	/**
	 * The decision on what to do in response to the authorization challenge. Default means deferring to the default behavior of the net stack, which will likely either the Cancel authentication or display a popup dialog box.
	 *
	 * @var string
	 */
	public $response;

	/**
	 * The username to provide, possibly empty. Should only be set if response is ProvideCredentials.
	 *
	 * @var string|null
	 */
	public $username;

	/**
	 * The password to provide, possibly empty. Should only be set if response is ProvideCredentials.
	 *
	 * @var string|null
	 */
	public $password;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->response)) {
			$instance->response = (string)$data->response;
		}
		if (isset($data->username)) {
			$instance->username = (string)$data->username;
		}
		if (isset($data->password)) {
			$instance->password = (string)$data->password;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->response !== null) {
			$data->response = $this->response;
		}
		if ($this->username !== null) {
			$data->username = $this->username;
		}
		if ($this->password !== null) {
			$data->password = $this->password;
		}
		return $data;
	}
}
