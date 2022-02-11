<?php

namespace ChromeDevtoolsProtocol\Model\WebAudio;

/**
 * Protocol object for BaseAudioContext
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BaseAudioContext implements \JsonSerializable
{
	/** @var string */
	public $contextId;

	/** @var string */
	public $contextType;

	/** @var string */
	public $contextState;

	/** @var ContextRealtimeData|null */
	public $realtimeData;

	/**
	 * Platform-dependent callback buffer size.
	 *
	 * @var int|float
	 */
	public $callbackBufferSize;

	/**
	 * Number of output channels supported by audio hardware in use.
	 *
	 * @var int|float
	 */
	public $maxOutputChannelCount;

	/**
	 * Context sample rate.
	 *
	 * @var int|float
	 */
	public $sampleRate;


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
		if (isset($data->contextType)) {
			$instance->contextType = (string)$data->contextType;
		}
		if (isset($data->contextState)) {
			$instance->contextState = (string)$data->contextState;
		}
		if (isset($data->realtimeData)) {
			$instance->realtimeData = ContextRealtimeData::fromJson($data->realtimeData);
		}
		if (isset($data->callbackBufferSize)) {
			$instance->callbackBufferSize = $data->callbackBufferSize;
		}
		if (isset($data->maxOutputChannelCount)) {
			$instance->maxOutputChannelCount = $data->maxOutputChannelCount;
		}
		if (isset($data->sampleRate)) {
			$instance->sampleRate = $data->sampleRate;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->contextId !== null) {
			$data->contextId = $this->contextId;
		}
		if ($this->contextType !== null) {
			$data->contextType = $this->contextType;
		}
		if ($this->contextState !== null) {
			$data->contextState = $this->contextState;
		}
		if ($this->realtimeData !== null) {
			$data->realtimeData = $this->realtimeData->jsonSerialize();
		}
		if ($this->callbackBufferSize !== null) {
			$data->callbackBufferSize = $this->callbackBufferSize;
		}
		if ($this->maxOutputChannelCount !== null) {
			$data->maxOutputChannelCount = $this->maxOutputChannelCount;
		}
		if ($this->sampleRate !== null) {
			$data->sampleRate = $this->sampleRate;
		}
		return $data;
	}
}
