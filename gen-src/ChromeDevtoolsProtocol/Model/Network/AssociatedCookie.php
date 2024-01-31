<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * A cookie associated with the request which may or may not be sent with it. Includes the cookies itself and reasons for blocking or exemption.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AssociatedCookie implements \JsonSerializable
{
	/**
	 * The cookie object representing the cookie which was not sent.
	 *
	 * @var Cookie
	 */
	public $cookie;

	/**
	 * The reason(s) the cookie was blocked. If empty means the cookie is included.
	 *
	 * @var string[]
	 */
	public $blockedReasons;

	/**
	 * The reason the cookie should have been blocked by 3PCD but is exempted. A cookie could only have at most one exemption reason.
	 *
	 * @var string
	 */
	public $exemptionReason;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->cookie)) {
			$instance->cookie = Cookie::fromJson($data->cookie);
		}
		if (isset($data->blockedReasons)) {
			$instance->blockedReasons = [];
		if (isset($data->blockedReasons)) {
			$instance->blockedReasons = [];
			foreach ($data->blockedReasons as $item) {
				$instance->blockedReasons[] = (string)$item;
			}
		}
		}
		if (isset($data->exemptionReason)) {
			$instance->exemptionReason = (string)$data->exemptionReason;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->cookie !== null) {
			$data->cookie = $this->cookie->jsonSerialize();
		}
		if ($this->blockedReasons !== null) {
			$data->blockedReasons = [];
		if ($this->blockedReasons !== null) {
			$data->blockedReasons = [];
			foreach ($this->blockedReasons as $item) {
				$data->blockedReasons[] = $item;
			}
		}
		}
		if ($this->exemptionReason !== null) {
			$data->exemptionReason = $this->exemptionReason;
		}
		return $data;
	}
}
