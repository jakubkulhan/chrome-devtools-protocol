<?php

namespace ChromeDevtoolsProtocol\Model\WebAudio;

/**
 * Notifies that an AudioNode is disconnected to an AudioParam.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class NodeParamDisconnectedEvent implements \JsonSerializable
{
	/** @var string */
	public $contextId;

	/** @var string */
	public $sourceId;

	/** @var string */
	public $destinationId;

	/** @var int|float|null */
	public $sourceOutputIndex;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->contextId)) {
			$instance->contextId = (string)$data->contextId;
		}
		if (isset($data->sourceId)) {
			$instance->sourceId = (string)$data->sourceId;
		}
		if (isset($data->destinationId)) {
			$instance->destinationId = (string)$data->destinationId;
		}
		if (isset($data->sourceOutputIndex)) {
			$instance->sourceOutputIndex = $data->sourceOutputIndex;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->contextId !== null) {
			$data->contextId = $this->contextId;
		}
		if ($this->sourceId !== null) {
			$data->sourceId = $this->sourceId;
		}
		if ($this->destinationId !== null) {
			$data->destinationId = $this->destinationId;
		}
		if ($this->sourceOutputIndex !== null) {
			$data->sourceOutputIndex = $this->sourceOutputIndex;
		}
		return $data;
	}
}
