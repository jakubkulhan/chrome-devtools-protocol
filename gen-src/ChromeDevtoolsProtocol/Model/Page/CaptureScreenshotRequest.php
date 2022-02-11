<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.captureScreenshot command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CaptureScreenshotRequest implements \JsonSerializable
{
	/**
	 * Image compression format (defaults to png).
	 *
	 * @var string|null
	 */
	public $format;

	/**
	 * Compression quality from range [0..100] (jpeg only).
	 *
	 * @var int|null
	 */
	public $quality;

	/**
	 * Capture the screenshot of a given region only.
	 *
	 * @var Viewport|null
	 */
	public $clip;

	/**
	 * Capture the screenshot from the surface, rather than the view. Defaults to true.
	 *
	 * @var bool|null
	 */
	public $fromSurface;

	/**
	 * Capture the screenshot beyond the viewport. Defaults to false.
	 *
	 * @var bool|null
	 */
	public $captureBeyondViewport;


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
		if (isset($data->clip)) {
			$instance->clip = Viewport::fromJson($data->clip);
		}
		if (isset($data->fromSurface)) {
			$instance->fromSurface = (bool)$data->fromSurface;
		}
		if (isset($data->captureBeyondViewport)) {
			$instance->captureBeyondViewport = (bool)$data->captureBeyondViewport;
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
		if ($this->clip !== null) {
			$data->clip = $this->clip->jsonSerialize();
		}
		if ($this->fromSurface !== null) {
			$data->fromSurface = $this->fromSurface;
		}
		if ($this->captureBeyondViewport !== null) {
			$data->captureBeyondViewport = $this->captureBeyondViewport;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return CaptureScreenshotRequestBuilder
	 */
	public static function builder(): CaptureScreenshotRequestBuilder
	{
		return new CaptureScreenshotRequestBuilder();
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
