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
	 * Send every n-th frame.
	 *
	 * @var int|null
	 */
	public $everyNthFrame;


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
