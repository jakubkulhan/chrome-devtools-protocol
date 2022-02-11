<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired when EventSource message is received.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EventSourceMessageReceivedEvent implements \JsonSerializable
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
	 * Message type.
	 *
	 * @var string
	 */
	public $eventName;

	/**
	 * Message identifier.
	 *
	 * @var string
	 */
	public $eventId;

	/**
	 * Message content.
	 *
	 * @var string
	 */
	public $data;


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
		if (isset($data->eventName)) {
			$instance->eventName = (string)$data->eventName;
		}
		if (isset($data->eventId)) {
			$instance->eventId = (string)$data->eventId;
		}
		if (isset($data->data)) {
			$instance->data = (string)$data->data;
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
		if ($this->eventName !== null) {
			$data->eventName = $this->eventName;
		}
		if ($this->eventId !== null) {
			$data->eventId = $this->eventId;
		}
		if ($this->data !== null) {
			$data->data = $this->data;
		}
		return $data;
	}
}
