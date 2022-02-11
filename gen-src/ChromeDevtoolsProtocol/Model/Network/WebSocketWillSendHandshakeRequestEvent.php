<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired when WebSocket is about to initiate handshake.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WebSocketWillSendHandshakeRequestEvent implements \JsonSerializable
{
	/**
	 * Request identifier.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * Timestamp.
	 *
	 * @var int|float
	 */
	public $timestamp;

	/**
	 * UTC Timestamp.
	 *
	 * @var int|float
	 */
	public $wallTime;

	/**
	 * WebSocket request data.
	 *
	 * @var WebSocketRequest
	 */
	public $request;


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
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		if (isset($data->wallTime)) {
			$instance->wallTime = $data->wallTime;
		}
		if (isset($data->request)) {
			$instance->request = WebSocketRequest::fromJson($data->request);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		if ($this->wallTime !== null) {
			$data->wallTime = $this->wallTime;
		}
		if ($this->request !== null) {
			$data->request = $this->request->jsonSerialize();
		}
		return $data;
	}
}
