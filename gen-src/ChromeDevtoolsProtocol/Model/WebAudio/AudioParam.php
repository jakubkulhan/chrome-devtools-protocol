<?php

namespace ChromeDevtoolsProtocol\Model\WebAudio;

/**
 * Protocol object for AudioParam
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AudioParam implements \JsonSerializable
{
	/** @var string */
	public $paramId;

	/** @var string */
	public $nodeId;

	/** @var string */
	public $contextId;

	/** @var string */
	public $paramType;

	/** @var string */
	public $rate;

	/** @var int|float */
	public $defaultValue;

	/** @var int|float */
	public $minValue;

	/** @var int|float */
	public $maxValue;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->paramId)) {
			$instance->paramId = (string)$data->paramId;
		}
		if (isset($data->nodeId)) {
			$instance->nodeId = (string)$data->nodeId;
		}
		if (isset($data->contextId)) {
			$instance->contextId = (string)$data->contextId;
		}
		if (isset($data->paramType)) {
			$instance->paramType = (string)$data->paramType;
		}
		if (isset($data->rate)) {
			$instance->rate = (string)$data->rate;
		}
		if (isset($data->defaultValue)) {
			$instance->defaultValue = $data->defaultValue;
		}
		if (isset($data->minValue)) {
			$instance->minValue = $data->minValue;
		}
		if (isset($data->maxValue)) {
			$instance->maxValue = $data->maxValue;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->paramId !== null) {
			$data->paramId = $this->paramId;
		}
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->contextId !== null) {
			$data->contextId = $this->contextId;
		}
		if ($this->paramType !== null) {
			$data->paramType = $this->paramType;
		}
		if ($this->rate !== null) {
			$data->rate = $this->rate;
		}
		if ($this->defaultValue !== null) {
			$data->defaultValue = $this->defaultValue;
		}
		if ($this->minValue !== null) {
			$data->minValue = $this->minValue;
		}
		if ($this->maxValue !== null) {
			$data->maxValue = $this->maxValue;
		}
		return $data;
	}
}
