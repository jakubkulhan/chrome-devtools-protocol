<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired when page is about to send HTTP request.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestWillBeSentEvent implements \JsonSerializable
{
	/**
	 * Request identifier.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * Loader identifier. Empty string if the request is fetched from worker.
	 *
	 * @var string
	 */
	public $loaderId;

	/**
	 * URL of the document this request is loaded for.
	 *
	 * @var string
	 */
	public $documentURL;

	/**
	 * Request data.
	 *
	 * @var Request
	 */
	public $request;

	/**
	 * Timestamp.
	 *
	 * @var int|float
	 */
	public $timestamp;

	/**
	 * Timestamp.
	 *
	 * @var int|float
	 */
	public $wallTime;

	/**
	 * Request initiator.
	 *
	 * @var Initiator
	 */
	public $initiator;

	/**
	 * In the case that redirectResponse is populated, this flag indicates whether requestWillBeSentExtraInfo and responseReceivedExtraInfo events will be or were emitted for the request which was just redirected.
	 *
	 * @var bool
	 */
	public $redirectHasExtraInfo;

	/**
	 * Redirect response data.
	 *
	 * @var Response|null
	 */
	public $redirectResponse;

	/**
	 * Type of this resource.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Frame identifier.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * Whether the request is initiated by a user gesture. Defaults to false.
	 *
	 * @var bool|null
	 */
	public $hasUserGesture;


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
		if (isset($data->loaderId)) {
			$instance->loaderId = (string)$data->loaderId;
		}
		if (isset($data->documentURL)) {
			$instance->documentURL = (string)$data->documentURL;
		}
		if (isset($data->request)) {
			$instance->request = Request::fromJson($data->request);
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		if (isset($data->wallTime)) {
			$instance->wallTime = $data->wallTime;
		}
		if (isset($data->initiator)) {
			$instance->initiator = Initiator::fromJson($data->initiator);
		}
		if (isset($data->redirectHasExtraInfo)) {
			$instance->redirectHasExtraInfo = (bool)$data->redirectHasExtraInfo;
		}
		if (isset($data->redirectResponse)) {
			$instance->redirectResponse = Response::fromJson($data->redirectResponse);
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->hasUserGesture)) {
			$instance->hasUserGesture = (bool)$data->hasUserGesture;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->loaderId !== null) {
			$data->loaderId = $this->loaderId;
		}
		if ($this->documentURL !== null) {
			$data->documentURL = $this->documentURL;
		}
		if ($this->request !== null) {
			$data->request = $this->request->jsonSerialize();
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		if ($this->wallTime !== null) {
			$data->wallTime = $this->wallTime;
		}
		if ($this->initiator !== null) {
			$data->initiator = $this->initiator->jsonSerialize();
		}
		if ($this->redirectHasExtraInfo !== null) {
			$data->redirectHasExtraInfo = $this->redirectHasExtraInfo;
		}
		if ($this->redirectResponse !== null) {
			$data->redirectResponse = $this->redirectResponse->jsonSerialize();
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->hasUserGesture !== null) {
			$data->hasUserGesture = $this->hasUserGesture;
		}
		return $data;
	}
}
