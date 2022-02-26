<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * This information is currently necessary, as the front-end has a difficult time finding a specific cookie. With this, we can convey specific error information without the cookie.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CookieIssueDetails implements \JsonSerializable
{
	/**
	 * If AffectedCookie is not set then rawCookieLine contains the raw Set-Cookie header string. This hints at a problem where the cookie line is syntactically or semantically malformed in a way that no valid cookie could be created.
	 *
	 * @var AffectedCookie|null
	 */
	public $cookie;

	/** @var string|null */
	public $rawCookieLine;

	/** @var string[] */
	public $cookieWarningReasons;

	/** @var string[] */
	public $cookieExclusionReasons;

	/**
	 * Optionally identifies the site-for-cookies and the cookie url, which may be used by the front-end as additional context.
	 *
	 * @var string
	 */
	public $operation;

	/** @var string|null */
	public $siteForCookies;

	/** @var string|null */
	public $cookieUrl;

	/** @var AffectedRequest|null */
	public $request;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->cookie)) {
			$instance->cookie = AffectedCookie::fromJson($data->cookie);
		}
		if (isset($data->rawCookieLine)) {
			$instance->rawCookieLine = (string)$data->rawCookieLine;
		}
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
		if (isset($data->operation)) {
			$instance->operation = (string)$data->operation;
		}
		if (isset($data->siteForCookies)) {
			$instance->siteForCookies = (string)$data->siteForCookies;
		}
		if (isset($data->cookieUrl)) {
			$instance->cookieUrl = (string)$data->cookieUrl;
		}
		if (isset($data->request)) {
			$instance->request = AffectedRequest::fromJson($data->request);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->cookie !== null) {
			$data->cookie = $this->cookie->jsonSerialize();
		}
		if ($this->rawCookieLine !== null) {
			$data->rawCookieLine = $this->rawCookieLine;
		}
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
		if ($this->operation !== null) {
			$data->operation = $this->operation;
		}
		if ($this->siteForCookies !== null) {
			$data->siteForCookies = $this->siteForCookies;
		}
		if ($this->cookieUrl !== null) {
			$data->cookieUrl = $this->cookieUrl;
		}
		if ($this->request !== null) {
			$data->request = $this->request->jsonSerialize();
		}
		return $data;
	}
}
