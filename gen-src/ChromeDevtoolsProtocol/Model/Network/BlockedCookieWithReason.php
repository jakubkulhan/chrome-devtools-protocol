<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * A cookie with was not sent with a request with the corresponding reason.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BlockedCookieWithReason implements \JsonSerializable
{
	/**
	 * The reason the cookie was blocked.
	 *
	 * @var string
	 */
	public $blockedReason;

	/**
	 * The cookie object representing the cookie which was not sent.
	 *
	 * @var Cookie
	 */
	public $cookie;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->blockedReason)) {
			$instance->blockedReason = (string)$data->blockedReason;
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
		if ($this->cookie !== null) {
			$data->cookie = $this->cookie->jsonSerialize();
		}
		return $data;
	}
}
