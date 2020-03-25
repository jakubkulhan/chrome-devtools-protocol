<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * This information is currently necessary, as the front-end has a difficult time finding a specific cookie. With this, we can convey specific error information without the cookie.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SameSiteCookieIssueDetails implements \JsonSerializable
{
	/** @var string[] */
	public $cookieWarningReasons;

	/** @var string[] */
	public $cookieExclusionReasons;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->cookieWarningReasons)) {
			$instance->cookieWarningReasons = [];
		if (isset($data->cookieWarningReasons)) {
			$instance->cookieWarningReasons = [];
			foreach ($data->cookieWarningReasons as $item) {
				$instance->cookieWarningReasons[] = (string)$item;
			}
		}
		}
		if (isset($data->cookieExclusionReasons)) {
			$instance->cookieExclusionReasons = [];
		if (isset($data->cookieExclusionReasons)) {
			$instance->cookieExclusionReasons = [];
			foreach ($data->cookieExclusionReasons as $item) {
				$instance->cookieExclusionReasons[] = (string)$item;
			}
		}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->cookieWarningReasons !== null) {
			$data->cookieWarningReasons = [];
		if ($this->cookieWarningReasons !== null) {
			$data->cookieWarningReasons = [];
			foreach ($this->cookieWarningReasons as $item) {
				$data->cookieWarningReasons[] = $item;
			}
		}
		}
		if ($this->cookieExclusionReasons !== null) {
			$data->cookieExclusionReasons = [];
		if ($this->cookieExclusionReasons !== null) {
			$data->cookieExclusionReasons = [];
			foreach ($this->cookieExclusionReasons as $item) {
				$data->cookieExclusionReasons[] = $item;
			}
		}
		}
		return $data;
	}
}
