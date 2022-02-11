<?php

namespace ChromeDevtoolsProtocol\Model\WebAudio;

/**
 * Notifies that an existing AudioParam has been destroyed.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AudioParamWillBeDestroyedEvent implements \JsonSerializable
{
	/** @var string */
	public $contextId;

	/** @var string */
	public $nodeId;

	/** @var string */
	public $paramId;


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
		if (isset($data->nodeId)) {
			$instance->nodeId = (string)$data->nodeId;
		}
		if (isset($data->paramId)) {
			$instance->paramId = (string)$data->paramId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->contextId !== null) {
			$data->contextId = $this->contextId;
		}
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->paramId !== null) {
			$data->paramId = $this->paramId;
		}
		return $data;
	}
}
