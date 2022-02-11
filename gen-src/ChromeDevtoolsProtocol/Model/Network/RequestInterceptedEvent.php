<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Details of an intercepted HTTP request, which must be either allowed, blocked, modified or mocked. Deprecated, use Fetch.requestPaused instead.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestInterceptedEvent implements \JsonSerializable
{
	/**
	 * Each request the page makes will have a unique id, however if any redirects are encountered while processing that fetch, they will be reported with the same id as the original fetch. Likewise if HTTP authentication is needed then the same fetch id will be used.
	 *
	 * @var string
	 */
	public $interceptionId;

	/** @var Request */
	public $request;

	/**
	 * The id of the frame that initiated the request.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * How the requested resource will be used.
	 *
	 * @var string
	 */
	public $resourceType;

	/**
	 * Whether this is a navigation request, which can abort the navigation completely.
	 *
	 * @var bool
	 */
	public $isNavigationRequest;

	/**
	 * Set if the request is a navigation that will result in a download. Only present after response is received from the server (i.e. HeadersReceived stage).
	 *
	 * @var bool|null
	 */
	public $isDownload;

	/**
	 * Redirect location, only sent if a redirect was intercepted.
	 *
	 * @var string|null
	 */
	public $redirectUrl;

	/**
	 * Details of the Authorization Challenge encountered. If this is set then continueInterceptedRequest must contain an authChallengeResponse.
	 *
	 * @var AuthChallenge|null
	 */
	public $authChallenge;

	/**
	 * Response error if intercepted at response stage or if redirect occurred while intercepting request.
	 *
	 * @var string
	 */
	public $responseErrorReason;

	/**
	 * Response code if intercepted at response stage or if redirect occurred while intercepting request or auth retry occurred.
	 *
	 * @var int|null
	 */
	public $responseStatusCode;

	/**
	 * Response headers if intercepted at the response stage or if redirect occurred while intercepting request or auth retry occurred.
	 *
	 * @var Headers|null
	 */
	public $responseHeaders;

	/**
	 * If the intercepted request had a corresponding requestWillBeSent event fired for it, then this requestId will be the same as the requestId present in the requestWillBeSent event.
	 *
	 * @var string
	 */
	public $requestId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->interceptionId)) {
			$instance->interceptionId = (string)$data->interceptionId;
		}
		if (isset($data->request)) {
			$instance->request = Request::fromJson($data->request);
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->resourceType)) {
			$instance->resourceType = (string)$data->resourceType;
		}
		if (isset($data->isNavigationRequest)) {
			$instance->isNavigationRequest = (bool)$data->isNavigationRequest;
		}
		if (isset($data->isDownload)) {
			$instance->isDownload = (bool)$data->isDownload;
		}
		if (isset($data->redirectUrl)) {
			$instance->redirectUrl = (string)$data->redirectUrl;
		}
		if (isset($data->authChallenge)) {
			$instance->authChallenge = AuthChallenge::fromJson($data->authChallenge);
		}
		if (isset($data->responseErrorReason)) {
			$instance->responseErrorReason = (string)$data->responseErrorReason;
		}
		if (isset($data->responseStatusCode)) {
			$instance->responseStatusCode = (int)$data->responseStatusCode;
		}
		if (isset($data->responseHeaders)) {
			$instance->responseHeaders = Headers::fromJson($data->responseHeaders);
		}
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->interceptionId !== null) {
			$data->interceptionId = $this->interceptionId;
		}
		if ($this->request !== null) {
			$data->request = $this->request->jsonSerialize();
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->resourceType !== null) {
			$data->resourceType = $this->resourceType;
		}
		if ($this->isNavigationRequest !== null) {
			$data->isNavigationRequest = $this->isNavigationRequest;
		}
		if ($this->isDownload !== null) {
			$data->isDownload = $this->isDownload;
		}
		if ($this->redirectUrl !== null) {
			$data->redirectUrl = $this->redirectUrl;
		}
		if ($this->authChallenge !== null) {
			$data->authChallenge = $this->authChallenge->jsonSerialize();
		}
		if ($this->responseErrorReason !== null) {
			$data->responseErrorReason = $this->responseErrorReason;
		}
		if ($this->responseStatusCode !== null) {
			$data->responseStatusCode = $this->responseStatusCode;
		}
		if ($this->responseHeaders !== null) {
			$data->responseHeaders = $this->responseHeaders->jsonSerialize();
		}
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		return $data;
	}
}
