<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * A device bound session.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeviceBoundSession implements \JsonSerializable
{
	/**
	 * The site and session ID of the session.
	 *
	 * @var DeviceBoundSessionKey
	 */
	public $key;

	/**
	 * See comments on `net::device_bound_sessions::Session::refresh_url_`.
	 *
	 * @var string
	 */
	public $refreshUrl;

	/**
	 * See comments on `net::device_bound_sessions::Session::inclusion_rules_`.
	 *
	 * @var DeviceBoundSessionInclusionRules
	 */
	public $inclusionRules;

	/**
	 * See comments on `net::device_bound_sessions::Session::cookie_cravings_`.
	 *
	 * @var DeviceBoundSessionCookieCraving[]
	 */
	public $cookieCravings;

	/**
	 * See comments on `net::device_bound_sessions::Session::expiry_date_`.
	 *
	 * @var int|float
	 */
	public $expiryDate;

	/**
	 * See comments on `net::device_bound_sessions::Session::cached_challenge__`.
	 *
	 * @var string|null
	 */
	public $cachedChallenge;

	/**
	 * See comments on `net::device_bound_sessions::Session::allowed_refresh_initiators_`.
	 *
	 * @var string[]
	 */
	public $allowedRefreshInitiators;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->key)) {
			$instance->key = DeviceBoundSessionKey::fromJson($data->key);
		}
		if (isset($data->refreshUrl)) {
			$instance->refreshUrl = (string)$data->refreshUrl;
		}
		if (isset($data->inclusionRules)) {
			$instance->inclusionRules = DeviceBoundSessionInclusionRules::fromJson($data->inclusionRules);
		}
		if (isset($data->cookieCravings)) {
			$instance->cookieCravings = [];
			foreach ($data->cookieCravings as $item) {
				$instance->cookieCravings[] = DeviceBoundSessionCookieCraving::fromJson($item);
			}
		}
		if (isset($data->expiryDate)) {
			$instance->expiryDate = $data->expiryDate;
		}
		if (isset($data->cachedChallenge)) {
			$instance->cachedChallenge = (string)$data->cachedChallenge;
		}
		if (isset($data->allowedRefreshInitiators)) {
			$instance->allowedRefreshInitiators = [];
			foreach ($data->allowedRefreshInitiators as $item) {
				$instance->allowedRefreshInitiators[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->key !== null) {
			$data->key = $this->key->jsonSerialize();
		}
		if ($this->refreshUrl !== null) {
			$data->refreshUrl = $this->refreshUrl;
		}
		if ($this->inclusionRules !== null) {
			$data->inclusionRules = $this->inclusionRules->jsonSerialize();
		}
		if ($this->cookieCravings !== null) {
			$data->cookieCravings = [];
			foreach ($this->cookieCravings as $item) {
				$data->cookieCravings[] = $item->jsonSerialize();
			}
		}
		if ($this->expiryDate !== null) {
			$data->expiryDate = $this->expiryDate;
		}
		if ($this->cachedChallenge !== null) {
			$data->cachedChallenge = $this->cachedChallenge;
		}
		if ($this->allowedRefreshInitiators !== null) {
			$data->allowedRefreshInitiators = [];
			foreach ($this->allowedRefreshInitiators as $item) {
				$data->allowedRefreshInitiators[] = $item;
			}
		}
		return $data;
	}
}
