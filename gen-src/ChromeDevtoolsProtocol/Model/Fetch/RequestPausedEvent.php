<?php

namespace ChromeDevtoolsProtocol\Model\Fetch;

use ChromeDevtoolsProtocol\Model\Network\Request;

/**
 * Issued when the domain is enabled and the request URL matches the specified filter. The request is paused until the client responds with one of continueRequest, failRequest or fulfillRequest. The stage of the request can be determined by presence of responseErrorReason and responseStatusCode -- the request is at the response stage if either of these fields is present and in the request stage otherwise.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestPausedEvent implements \JsonSerializable
{
	/**
	 * Each request the page makes will have a unique id.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * The details of the request.
	 *
	 * @var Request
	 */
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
	 * Response error if intercepted at response stage.
	 *
	 * @var string
	 */
	public $responseErrorReason;

	/**
	 * Response code if intercepted at response stage.
	 *
	 * @var int|null
	 */
	public $responseStatusCode;

	/**
	 * Response status text if intercepted at response stage.
	 *
	 * @var string|null
	 */
	public $responseStatusText;

	/**
	 * Response headers if intercepted at the response stage.
	 *
	 * @var HeaderEntry[]|null
	 */
	public $responseHeaders;

	/**
	 * If the intercepted request had a corresponding Network.requestWillBeSent event fired for it, then this networkId will be the same as the requestId present in the requestWillBeSent event.
	 *
	 * @var string
	 */
	public $networkId;


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
		if (isset($data->request)) {
			$instance->request = Request::fromJson($data->request);
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->resourceType)) {
			$instance->resourceType = (string)$data->resourceType;
		}
		if (isset($data->responseErrorReason)) {
			$instance->responseErrorReason = (string)$data->responseErrorReason;
		}
		if (isset($data->responseStatusCode)) {
			$instance->responseStatusCode = (int)$data->responseStatusCode;
		}
		if (isset($data->responseStatusText)) {
			$instance->responseStatusText = (string)$data->responseStatusText;
		}
		if (isset($data->responseHeaders)) {
			$instance->responseHeaders = [];
			foreach ($data->responseHeaders as $item) {
				$instance->responseHeaders[] = HeaderEntry::fromJson($item);
			}
		}
		if (isset($data->networkId)) {
			$instance->networkId = (string)$data->networkId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
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
		if ($this->responseErrorReason !== null) {
			$data->responseErrorReason = $this->responseErrorReason;
		}
		if ($this->responseStatusCode !== null) {
			$data->responseStatusCode = $this->responseStatusCode;
		}
		if ($this->responseStatusText !== null) {
			$data->responseStatusText = $this->responseStatusText;
		}
		if ($this->responseHeaders !== null) {
			$data->responseHeaders = [];
			foreach ($this->responseHeaders as $item) {
				$data->responseHeaders[] = $item->jsonSerialize();
			}
		}
		if ($this->networkId !== null) {
			$data->networkId = $this->networkId;
		}
		return $data;
	}
}
