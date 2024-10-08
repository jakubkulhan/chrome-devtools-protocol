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
	 * The reason(s) this cookie was blocked.
	 *
	 * @var string[]
	 */
	public $blockedReasons;

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


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->blockedReasons)) {
			$instance->blockedReasons = [];
		if (isset($data->blockedReasons)) {
			$instance->blockedReasons = [];
			foreach ($data->blockedReasons as $item) {
				$instance->blockedReasons[] = (string)$item;
			}
		}
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
		if ($this->blockedReasons !== null) {
			$data->blockedReasons = [];
		if ($this->blockedReasons !== null) {
			$data->blockedReasons = [];
			foreach ($this->blockedReasons as $item) {
				$data->blockedReasons[] = $item;
			}
		}
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
