<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired when WebTransport is disposed.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WebTransportClosedEvent implements \JsonSerializable
{
	/**
	 * WebTransport identifier.
	 *
	 * @var string
	 */
	public $transportId;

	/**
	 * Timestamp.
	 *
	 * @var int|float
	 */
	public $timestamp;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->transportId)) {
			$instance->transportId = (string)$data->transportId;
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->transportId !== null) {
			$data->transportId = $this->transportId;
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		return $data;
	}
}
