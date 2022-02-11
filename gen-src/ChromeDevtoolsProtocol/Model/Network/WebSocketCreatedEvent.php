<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired upon WebSocket creation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WebSocketCreatedEvent implements \JsonSerializable
{
	/**
	 * Request identifier.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * WebSocket request URL.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Request initiator.
	 *
	 * @var Initiator|null
	 */
	public $initiator;


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
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->initiator)) {
			$instance->initiator = Initiator::fromJson($data->initiator);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->initiator !== null) {
			$data->initiator = $this->initiator->jsonSerialize();
		}
		return $data;
	}
}
