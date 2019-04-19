<?php

namespace ChromeDevtoolsProtocol\Model\WebAudio;

/**
 * Fields in AudioContext that change in real-time. These are not updated on OfflineAudioContext.
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
	 * @var int|float|null
	 */
	public $currentTime;

	/**
	 * The time spent on rendering graph divided by render qunatum duration, and multiplied by 100. 100 means the audio renderer reached the full capacity and glitch may occur.
	 *
	 * @var int|float|null
	 */
	public $renderCapacity;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->currentTime)) {
			$instance->currentTime = $data->currentTime;
		}
		if (isset($data->renderCapacity)) {
			$instance->renderCapacity = $data->renderCapacity;
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
		return $data;
	}
}
