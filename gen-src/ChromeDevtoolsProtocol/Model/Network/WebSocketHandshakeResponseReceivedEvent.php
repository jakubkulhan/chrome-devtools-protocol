<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired when WebSocket handshake response becomes available.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WebSocketHandshakeResponseReceivedEvent implements \JsonSerializable
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
	 * WebSocket response data.
	 *
	 * @var WebSocketResponse
	 */
	public $response;


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
		if (isset($data->response)) {
			$instance->response = WebSocketResponse::fromJson($data->response);
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
		if ($this->response !== null) {
			$data->response = $this->response->jsonSerialize();
		}
		return $data;
	}
}
