<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired when data is received from tcp direct socket stream.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DirectTCPSocketChunkReceivedEvent implements \JsonSerializable
{
	/** @var string */
	public $identifier;

	/** @var string */
	public $data;

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
		if (isset($data->data)) {
			$instance->data = (string)$data->data;
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
		if ($this->data !== null) {
			$data->data = $this->data;
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		return $data;
	}
}
