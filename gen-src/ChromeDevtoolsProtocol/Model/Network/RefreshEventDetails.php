<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Session event details specific to refresh.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RefreshEventDetails implements \JsonSerializable
{
	/**
	 * The result of a refresh.
	 *
	 * @var string
	 */
	public $refreshResult;

	/**
	 * If there was a fetch attempt, the result of that.
	 *
	 * @var string
	 */
	public $fetchResult;

	/**
	 * The session display if there was a newly created session. This is populated for any refresh event that modifies the session config.
	 *
	 * @var DeviceBoundSession|null
	 */
	public $newSession;

	/**
	 * See comments on `net::device_bound_sessions::RefreshEventResult::was_fully_proactive_refresh`.
	 *
	 * @var bool
	 */
	public $wasFullyProactiveRefresh;

	/**
	 * Details about a failed device bound session network request if there was one.
	 *
	 * @var DeviceBoundSessionFailedRequest|null
	 */
	public $failedRequest;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->refreshResult)) {
			$instance->refreshResult = (string)$data->refreshResult;
		}
		if (isset($data->fetchResult)) {
			$instance->fetchResult = (string)$data->fetchResult;
		}
		if (isset($data->newSession)) {
			$instance->newSession = DeviceBoundSession::fromJson($data->newSession);
		}
		if (isset($data->wasFullyProactiveRefresh)) {
			$instance->wasFullyProactiveRefresh = (bool)$data->wasFullyProactiveRefresh;
		}
		if (isset($data->failedRequest)) {
			$instance->failedRequest = DeviceBoundSessionFailedRequest::fromJson($data->failedRequest);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->refreshResult !== null) {
			$data->refreshResult = $this->refreshResult;
		}
		if ($this->fetchResult !== null) {
			$data->fetchResult = $this->fetchResult;
		}
		if ($this->newSession !== null) {
			$data->newSession = $this->newSession->jsonSerialize();
		}
		if ($this->wasFullyProactiveRefresh !== null) {
			$data->wasFullyProactiveRefresh = $this->wasFullyProactiveRefresh;
		}
		if ($this->failedRequest !== null) {
			$data->failedRequest = $this->failedRequest->jsonSerialize();
		}
		return $data;
	}
}
