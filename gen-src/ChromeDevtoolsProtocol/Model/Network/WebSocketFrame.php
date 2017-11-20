<?php
namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * WebSocket frame data.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WebSocketFrame implements \JsonSerializable
{
	/**
	 * WebSocket frame opcode.
	 *
	 * @var int|float
	 */
	public $opcode;

	/**
	 * WebSocke frame mask.
	 *
	 * @var bool
	 */
	public $mask;

	/**
	 * WebSocke frame payload data.
	 *
	 * @var string
	 */
	public $payloadData;


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
