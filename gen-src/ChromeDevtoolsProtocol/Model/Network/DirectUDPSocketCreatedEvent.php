<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired upon direct_socket.UDPSocket creation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DirectUDPSocketCreatedEvent implements \JsonSerializable
{
	/** @var string */
	public $identifier;

	/** @var DirectUDPSocketOptions */
	public $options;

	/** @var int|float */
	public $timestamp;

	/** @var Initiator|null */
	public $initiator;


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
		if (isset($data->options)) {
			$instance->options = DirectUDPSocketOptions::fromJson($data->options);
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
		if ($this->identifier !== null) {
			$data->identifier = $this->identifier;
		}
		if ($this->options !== null) {
			$data->options = $this->options->jsonSerialize();
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
