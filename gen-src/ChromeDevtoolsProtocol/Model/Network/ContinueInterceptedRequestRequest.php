<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Request for Network.continueInterceptedRequest command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ContinueInterceptedRequestRequest implements \JsonSerializable
{
	/** @var string */
	public $interceptionId;

	/**
	 * If set this causes the request to fail with the given reason. Passing `Aborted` for requests marked with `isNavigationRequest` also cancels the navigation. Must not be set in response to an authChallenge.
	 *
	 * @var string
	 */
	public $errorReason;

	/**
	 * If set the requests completes using with the provided base64 encoded raw response, including HTTP status line and headers etc... Must not be set in response to an authChallenge. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string|null
	 */
	public $rawResponse;

	/**
	 * If set the request url will be modified in a way that's not observable by page. Must not be set in response to an authChallenge.
	 *
	 * @var string|null
	 */
	public $url;

	/**
	 * If set this allows the request method to be overridden. Must not be set in response to an authChallenge.
	 *
	 * @var string|null
	 */
	public $method;

	/**
	 * If set this allows postData to be set. Must not be set in response to an authChallenge.
	 *
	 * @var string|null
	 */
	public $postData;

	/**
	 * If set this allows the request headers to be changed. Must not be set in response to an authChallenge.
	 *
	 * @var Headers|null
	 */
	public $headers;

	/**
	 * Response to a requestIntercepted with an authChallenge. Must not be set otherwise.
	 *
	 * @var AuthChallengeResponse|null
	 */
	public $authChallengeResponse;


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
		if (isset($data->errorReason)) {
			$instance->errorReason = (string)$data->errorReason;
		}
		if (isset($data->rawResponse)) {
			$instance->rawResponse = (string)$data->rawResponse;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->method)) {
			$instance->method = (string)$data->method;
		}
		if (isset($data->postData)) {
			$instance->postData = (string)$data->postData;
		}
		if (isset($data->headers)) {
			$instance->headers = Headers::fromJson($data->headers);
		}
		if (isset($data->authChallengeResponse)) {
			$instance->authChallengeResponse = AuthChallengeResponse::fromJson($data->authChallengeResponse);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->interceptionId !== null) {
			$data->interceptionId = $this->interceptionId;
		}
		if ($this->errorReason !== null) {
			$data->errorReason = $this->errorReason;
		}
		if ($this->rawResponse !== null) {
			$data->rawResponse = $this->rawResponse;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->method !== null) {
			$data->method = $this->method;
		}
		if ($this->postData !== null) {
			$data->postData = $this->postData;
		}
		if ($this->headers !== null) {
			$data->headers = $this->headers->jsonSerialize();
		}
		if ($this->authChallengeResponse !== null) {
			$data->authChallengeResponse = $this->authChallengeResponse->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ContinueInterceptedRequestRequestBuilder
	 */
	public static function builder(): ContinueInterceptedRequestRequestBuilder
	{
		return new ContinueInterceptedRequestRequestBuilder();
	}
}
