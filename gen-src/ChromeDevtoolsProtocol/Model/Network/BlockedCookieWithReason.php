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
	 * The reason(s) the cookie was blocked.
	 *
	 * @var string[]
	 */
	public $blockedReasons;

	/**
	 * The cookie object representing the cookie which was not sent.
	 *
	 * @var Cookie
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
		if ($this->cookie !== null) {
			$data->cookie = $this->cookie->jsonSerialize();
		}
		return $data;
	}
}
