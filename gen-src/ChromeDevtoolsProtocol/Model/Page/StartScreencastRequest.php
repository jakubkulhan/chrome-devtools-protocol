<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.startScreencast command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StartScreencastRequest implements \JsonSerializable
{
	/**
	 * Image compression format.
	 *
	 * @var string|null
	 */
	public $format;

	/**
	 * Compression quality from range [0..100].
	 *
	 * @var int|null
	 */
	public $quality;

	/**
	 * Maximum screenshot width.
	 *
	 * @var int|null
	 */
	public $maxWidth;

	/**
	 * Maximum screenshot height.
	 *
	 * @var int|null
	 */
	public $maxHeight;

	/**
	 * Send every n-th frame. Must be a positive integer.
	 *
	 * @var int|null
	 */
	public $everyNthFrame;

	/**
	 * Maximum number of frames sent until screencastFrameAck is required. Defaults to 3. Must be a positive integer.
	 *
	 * @var int|null
	 */
	public $maxFramesInFlight;

	/**
	 * By default, after screencastFrameAck arrives, the next produced frame is sent. Passing this flag enables storing the last produced frame in memory, which is immediately sent upon screencastFrameAck. This way, overall performance is traded for a better latency.
	 *
	 * @var bool|null
	 */
	public $sendLastFrame;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->format)) {
			$instance->format = (string)$data->format;
		}
		if (isset($data->quality)) {
			$instance->quality = (int)$data->quality;
		}
		if (isset($data->maxWidth)) {
			$instance->maxWidth = (int)$data->maxWidth;
		}
		if (isset($data->maxHeight)) {
			$instance->maxHeight = (int)$data->maxHeight;
		}
		if (isset($data->everyNthFrame)) {
			$instance->everyNthFrame = (int)$data->everyNthFrame;
		}
		if (isset($data->maxFramesInFlight)) {
			$instance->maxFramesInFlight = (int)$data->maxFramesInFlight;
		}
		if (isset($data->sendLastFrame)) {
			$instance->sendLastFrame = (bool)$data->sendLastFrame;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->format !== null) {
			$data->format = $this->format;
		}
		if ($this->quality !== null) {
			$data->quality = $this->quality;
		}
		if ($this->maxWidth !== null) {
			$data->maxWidth = $this->maxWidth;
		}
		if ($this->maxHeight !== null) {
			$data->maxHeight = $this->maxHeight;
		}
		if ($this->everyNthFrame !== null) {
			$data->everyNthFrame = $this->everyNthFrame;
		}
		if ($this->maxFramesInFlight !== null) {
			$data->maxFramesInFlight = $this->maxFramesInFlight;
		}
		if ($this->sendLastFrame !== null) {
			$data->sendLastFrame = $this->sendLastFrame;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return StartScreencastRequestBuilder
	 */
	public static function builder(): StartScreencastRequestBuilder
	{
		return new StartScreencastRequestBuilder();
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
