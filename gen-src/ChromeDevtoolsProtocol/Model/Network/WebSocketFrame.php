<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * WebSocket message data. This represents an entire WebSocket message, not just a fragmented frame as the name suggests.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WebSocketFrame implements \JsonSerializable
{
	/**
	 * WebSocket message opcode.
	 *
	 * @var int|float
	 */
	public $opcode;

	/**
	 * WebSocket message mask.
	 *
	 * @var bool
	 */
	public $mask;

	/**
	 * WebSocket message payload data. If the opcode is 1, this is a text message and payloadData is a UTF-8 string. If the opcode isn't 1, then payloadData is a base64 encoded string representing binary data.
	 *
	 * @var string
	 */
	public $payloadData;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->opcode)) {
			$instance->opcode = $data->opcode;
		}
		if (isset($data->mask)) {
			$instance->mask = (bool)$data->mask;
		}
		if (isset($data->payloadData)) {
			$instance->payloadData = (string)$data->payloadData;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->opcode !== null) {
			$data->opcode = $this->opcode;
		}
		if ($this->mask !== null) {
			$data->mask = $this->mask;
		}
		if ($this->payloadData !== null) {
			$data->payloadData = $this->payloadData;
		}
		return $data;
	}
}
