<?php

namespace ChromeDevtoolsProtocol\Model\BackgroundService;

/**
 * Request for BackgroundService.setRecording command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetRecordingRequest implements \JsonSerializable
{
	/** @var bool */
	public $shouldRecord;

	/** @var string */
	public $service;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->shouldRecord)) {
			$instance->shouldRecord = (bool)$data->shouldRecord;
		}
		if (isset($data->service)) {
			$instance->service = (string)$data->service;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->shouldRecord !== null) {
			$data->shouldRecord = $this->shouldRecord;
		}
		if ($this->service !== null) {
			$data->service = $this->service;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetRecordingRequestBuilder
	 */
	public static function builder(): SetRecordingRequestBuilder
	{
		return new SetRecordingRequestBuilder();
	}
}
