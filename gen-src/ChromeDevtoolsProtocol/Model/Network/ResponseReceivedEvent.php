<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired when HTTP response is available.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ResponseReceivedEvent implements \JsonSerializable
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
	 * Timestamp.
	 *
	 * @var int|float
	 */
	public $timestamp;

	/**
	 * Resource type.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Response data.
	 *
	 * @var Response
	 */
	public $response;

	/**
	 * Indicates whether requestWillBeSentExtraInfo and responseReceivedExtraInfo events will be or were emitted for this request.
	 *
	 * @var bool
	 */
	public $hasExtraInfo;

	/**
	 * Frame identifier.
	 *
	 * @var string
	 */
	public $frameId;


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
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->response)) {
			$instance->response = Response::fromJson($data->response);
		}
		if (isset($data->hasExtraInfo)) {
			$instance->hasExtraInfo = (bool)$data->hasExtraInfo;
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
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
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->response !== null) {
			$data->response = $this->response->jsonSerialize();
		}
		if ($this->hasExtraInfo !== null) {
			$data->hasExtraInfo = $this->hasExtraInfo;
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		return $data;
	}
}
