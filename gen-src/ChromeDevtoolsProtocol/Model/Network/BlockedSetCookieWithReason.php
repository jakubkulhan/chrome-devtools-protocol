<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * A cookie which was not stored from a response with the corresponding reason.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BlockedSetCookieWithReason implements \JsonSerializable
{
	/**
	 * The reason this cookie was blocked.
	 *
	 * @var string
	 */
	public $blockedReason;

	/**
	 * The string representing this individual cookie as it would appear in the header. This is not the entire "cookie" or "set-cookie" header which could have multiple cookies.
	 *
	 * @var string
	 */
	public $cookieLine;

	/**
	 * The cookie object which represents the cookie which was not stored. It is optional because sometimes complete cookie information is not available, such as in the case of parsing errors.
	 *
	 * @var Cookie|null
	 */
	public $cookie;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->blockedReason)) {
			$instance->blockedReason = (string)$data->blockedReason;
		}
		if (isset($data->cookieLine)) {
			$instance->cookieLine = (string)$data->cookieLine;
		}
		if (isset($data->cookie)) {
			$instance->cookie = Cookie::fromJson($data->cookie);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->blockedReason !== null) {
			$data->blockedReason = $this->blockedReason;
		}
		if ($this->cookieLine !== null) {
			$data->cookieLine = $this->cookieLine;
		}
		if ($this->cookie !== null) {
			$data->cookie = $this->cookie->jsonSerialize();
		}
		return $data;
	}
}
