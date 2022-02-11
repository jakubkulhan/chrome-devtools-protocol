<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired upon WebTransport creation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WebTransportCreatedEvent implements \JsonSerializable
{
	/**
	 * WebTransport identifier.
	 *
	 * @var string
	 */
	public $transportId;

	/**
	 * WebTransport request URL.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Timestamp.
	 *
	 * @var int|float
	 */
	public $timestamp;

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
		if (isset($data->transportId)) {
			$instance->transportId = (string)$data->transportId;
		}
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		if (isset($data->initiator)) {
			$instance->initiator = Initiator::fromJson($data->initiator);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->transportId !== null) {
			$data->transportId = $this->transportId;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		if ($this->initiator !== null) {
			$data->initiator = $this->initiator->jsonSerialize();
		}
		return $data;
	}
}
