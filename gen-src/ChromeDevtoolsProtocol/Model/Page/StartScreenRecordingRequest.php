<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.startScreenRecording command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StartScreenRecordingRequest implements \JsonSerializable
{
	/** @var bool|null */
	public $audio;

	/**
	 * Maximum frame width in pixels.
	 *
	 * @var int|null
	 */
	public $maxWidth;

	/**
	 * Maximum frame height in pixels.
	 *
	 * @var int|null
	 */
	public $maxHeight;

	/**
	 * Maximum frame rate in frames per second.
	 *
	 * @var int|null
	 */
	public $frameRate;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->audio)) {
			$instance->audio = (bool)$data->audio;
		}
		if (isset($data->maxWidth)) {
			$instance->maxWidth = (int)$data->maxWidth;
		}
		if (isset($data->maxHeight)) {
			$instance->maxHeight = (int)$data->maxHeight;
		}
		if (isset($data->frameRate)) {
			$instance->frameRate = (int)$data->frameRate;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->audio !== null) {
			$data->audio = $this->audio;
		}
		if ($this->maxWidth !== null) {
			$data->maxWidth = $this->maxWidth;
		}
		if ($this->maxHeight !== null) {
			$data->maxHeight = $this->maxHeight;
		}
		if ($this->frameRate !== null) {
			$data->frameRate = $this->frameRate;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return StartScreenRecordingRequestBuilder
	 */
	public static function builder(): StartScreenRecordingRequestBuilder
	{
		return new StartScreenRecordingRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
