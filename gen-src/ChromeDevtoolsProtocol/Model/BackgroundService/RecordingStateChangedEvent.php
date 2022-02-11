<?php

namespace ChromeDevtoolsProtocol\Model\BackgroundService;

/**
 * Called when the recording state for the service has been updated.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RecordingStateChangedEvent implements \JsonSerializable
{
	/** @var bool */
	public $isRecording;

	/** @var string */
	public $service;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->isRecording)) {
			$instance->isRecording = (bool)$data->isRecording;
		}
		if (isset($data->service)) {
			$instance->service = (string)$data->service;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->isRecording !== null) {
			$data->isRecording = $this->isRecording;
		}
		if ($this->service !== null) {
			$data->service = $this->service;
		}
		return $data;
	}
}
