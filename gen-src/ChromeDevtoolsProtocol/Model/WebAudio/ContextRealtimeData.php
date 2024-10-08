<?php

namespace ChromeDevtoolsProtocol\Model\WebAudio;

/**
 * Fields in AudioContext that change in real-time.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ContextRealtimeData implements \JsonSerializable
{
	/**
	 * The current context time in second in BaseAudioContext.
	 *
	 * @var int|float
	 */
	public $currentTime;

	/**
	 * The time spent on rendering graph divided by render quantum duration, and multiplied by 100. 100 means the audio renderer reached the full capacity and glitch may occur.
	 *
	 * @var int|float
	 */
	public $renderCapacity;

	/**
	 * A running mean of callback interval.
	 *
	 * @var int|float
	 */
	public $callbackIntervalMean;

	/**
	 * A running variance of callback interval.
	 *
	 * @var int|float
	 */
	public $callbackIntervalVariance;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->currentTime)) {
			$instance->currentTime = $data->currentTime;
		}
		if (isset($data->renderCapacity)) {
			$instance->renderCapacity = $data->renderCapacity;
		}
		if (isset($data->callbackIntervalMean)) {
			$instance->callbackIntervalMean = $data->callbackIntervalMean;
		}
		if (isset($data->callbackIntervalVariance)) {
			$instance->callbackIntervalVariance = $data->callbackIntervalVariance;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->currentTime !== null) {
			$data->currentTime = $this->currentTime;
		}
		if ($this->renderCapacity !== null) {
			$data->renderCapacity = $this->renderCapacity;
		}
		if ($this->callbackIntervalMean !== null) {
			$data->callbackIntervalMean = $this->callbackIntervalMean;
		}
		if ($this->callbackIntervalVariance !== null) {
			$data->callbackIntervalVariance = $this->callbackIntervalVariance;
		}
		return $data;
	}
}
