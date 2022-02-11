<?php

namespace ChromeDevtoolsProtocol\Model\WebAudio;

/**
 * Protocol object for AudioNode
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AudioNode implements \JsonSerializable
{
	/** @var string */
	public $nodeId;

	/** @var string */
	public $contextId;

	/** @var string */
	public $nodeType;

	/** @var int|float */
	public $numberOfInputs;

	/** @var int|float */
	public $numberOfOutputs;

	/** @var int|float */
	public $channelCount;

	/** @var string */
	public $channelCountMode;

	/** @var string */
	public $channelInterpretation;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (string)$data->nodeId;
		}
		if (isset($data->contextId)) {
			$instance->contextId = (string)$data->contextId;
		}
		if (isset($data->nodeType)) {
			$instance->nodeType = (string)$data->nodeType;
		}
		if (isset($data->numberOfInputs)) {
			$instance->numberOfInputs = $data->numberOfInputs;
		}
		if (isset($data->numberOfOutputs)) {
			$instance->numberOfOutputs = $data->numberOfOutputs;
		}
		if (isset($data->channelCount)) {
			$instance->channelCount = $data->channelCount;
		}
		if (isset($data->channelCountMode)) {
			$instance->channelCountMode = (string)$data->channelCountMode;
		}
		if (isset($data->channelInterpretation)) {
			$instance->channelInterpretation = (string)$data->channelInterpretation;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->contextId !== null) {
			$data->contextId = $this->contextId;
		}
		if ($this->nodeType !== null) {
			$data->nodeType = $this->nodeType;
		}
		if ($this->numberOfInputs !== null) {
			$data->numberOfInputs = $this->numberOfInputs;
		}
		if ($this->numberOfOutputs !== null) {
			$data->numberOfOutputs = $this->numberOfOutputs;
		}
		if ($this->channelCount !== null) {
			$data->channelCount = $this->channelCount;
		}
		if ($this->channelCountMode !== null) {
			$data->channelCountMode = $this->channelCountMode;
		}
		if ($this->channelInterpretation !== null) {
			$data->channelInterpretation = $this->channelInterpretation;
		}
		return $data;
	}
}
