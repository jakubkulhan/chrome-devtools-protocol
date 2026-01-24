<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired when additional information about a requestWillBeSent event is available from the network stack. Not every requestWillBeSent event will have an additional requestWillBeSentExtraInfo fired for it, and there is no guarantee whether requestWillBeSent or requestWillBeSentExtraInfo will be fired first for the same request.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestWillBeSentExtraInfoEvent implements \JsonSerializable
{
	/**
	 * Request identifier. Used to match this information to an existing requestWillBeSent event.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * A list of cookies potentially associated to the requested URL. This includes both cookies sent with the request and the ones not sent; the latter are distinguished by having blockedReasons field set.
	 *
	 * @var AssociatedCookie[]
	 */
	public $associatedCookies;

	/**
	 * Raw request headers as they will be sent over the wire.
	 *
	 * @var Headers
	 */
	public $headers;

	/**
	 * Connection timing information for the request.
	 *
	 * @var ConnectTiming
	 */
	public $connectTiming;

	/**
	 * How the request site's device bound sessions were used during this request.
	 *
	 * @var DeviceBoundSessionWithUsage[]|null
	 */
	public $deviceBoundSessionUsages;

	/**
	 * The client security state set for the request.
	 *
	 * @var ClientSecurityState|null
	 */
	public $clientSecurityState;

	/**
	 * Whether the site has partitioned cookies stored in a partition different than the current one.
	 *
	 * @var bool|null
	 */
	public $siteHasCookieInOtherPartition;

	/**
	 * The network conditions id if this request was affected by network conditions configured via emulateNetworkConditionsByRule.
	 *
	 * @var string|null
	 */
	public $appliedNetworkConditionsId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		if (isset($data->associatedCookies)) {
			$instance->associatedCookies = [];
			foreach ($data->associatedCookies as $item) {
				$instance->associatedCookies[] = AssociatedCookie::fromJson($item);
			}
		}
		if (isset($data->headers)) {
			$instance->headers = Headers::fromJson($data->headers);
		}
		if (isset($data->connectTiming)) {
			$instance->connectTiming = ConnectTiming::fromJson($data->connectTiming);
		}
		if (isset($data->deviceBoundSessionUsages)) {
			$instance->deviceBoundSessionUsages = [];
			foreach ($data->deviceBoundSessionUsages as $item) {
				$instance->deviceBoundSessionUsages[] = DeviceBoundSessionWithUsage::fromJson($item);
			}
		}
		if (isset($data->clientSecurityState)) {
			$instance->clientSecurityState = ClientSecurityState::fromJson($data->clientSecurityState);
		}
		if (isset($data->siteHasCookieInOtherPartition)) {
			$instance->siteHasCookieInOtherPartition = (bool)$data->siteHasCookieInOtherPartition;
		}
		if (isset($data->appliedNetworkConditionsId)) {
			$instance->appliedNetworkConditionsId = (string)$data->appliedNetworkConditionsId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->associatedCookies !== null) {
			$data->associatedCookies = [];
			foreach ($this->associatedCookies as $item) {
				$data->associatedCookies[] = $item->jsonSerialize();
			}
		}
		if ($this->headers !== null) {
			$data->headers = $this->headers->jsonSerialize();
		}
		if ($this->connectTiming !== null) {
			$data->connectTiming = $this->connectTiming->jsonSerialize();
		}
		if ($this->deviceBoundSessionUsages !== null) {
			$data->deviceBoundSessionUsages = [];
			foreach ($this->deviceBoundSessionUsages as $item) {
				$data->deviceBoundSessionUsages[] = $item->jsonSerialize();
			}
		}
		if ($this->clientSecurityState !== null) {
			$data->clientSecurityState = $this->clientSecurityState->jsonSerialize();
		}
		if ($this->siteHasCookieInOtherPartition !== null) {
			$data->siteHasCookieInOtherPartition = $this->siteHasCookieInOtherPartition;
		}
		if ($this->appliedNetworkConditionsId !== null) {
			$data->appliedNetworkConditionsId = $this->appliedNetworkConditionsId;
		}
		return $data;
	}
}
