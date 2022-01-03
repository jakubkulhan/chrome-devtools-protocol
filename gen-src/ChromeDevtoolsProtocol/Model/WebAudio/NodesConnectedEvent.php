<?php

namespace ChromeDevtoolsProtocol\Model\WebAudio;

/**
 * Notifies that two AudioNodes are connected.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class NodesConnectedEvent implements \JsonSerializable
{
	/** @var string */
	public $contextId;

	/** @var string */
	public $sourceId;

	/** @var string */
	public $destinationId;

	/** @var int|float|null */
	public $sourceOutputIndex;

	/** @var int|float|null */
	public $destinationInputIndex;


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
		if (isset($data->destinationInputIndex)) {
			$instance->destinationInputIndex = $data->destinationInputIndex;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
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
		if ($this->destinationInputIndex !== null) {
			$data->destinationInputIndex = $this->destinationInputIndex;
		}
		return $data;
	}
}
