<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired when message is received from udp direct socket stream.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DirectUDPSocketChunkReceivedEvent implements \JsonSerializable
{
	/** @var string */
	public $identifier;

	/** @var DirectUDPMessage */
	public $message;

	/** @var int|float */
	public $timestamp;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->identifier)) {
			$instance->identifier = (string)$data->identifier;
		}
		if (isset($data->message)) {
			$instance->message = DirectUDPMessage::fromJson($data->message);
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->identifier !== null) {
			$data->identifier = $this->identifier;
		}
		if ($this->message !== null) {
			$data->message = $this->message->jsonSerialize();
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		return $data;
	}
}
