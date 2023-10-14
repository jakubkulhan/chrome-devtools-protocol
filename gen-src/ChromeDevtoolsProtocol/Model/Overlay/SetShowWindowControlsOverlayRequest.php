<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Request for Overlay.setShowWindowControlsOverlay command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowWindowControlsOverlayRequest implements \JsonSerializable
{
	/**
	 * Window Controls Overlay data, null means hide Window Controls Overlay
	 *
	 * @var WindowControlsOverlayConfig|null
	 */
	public $windowControlsOverlayConfig;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->windowControlsOverlayConfig)) {
			$instance->windowControlsOverlayConfig = WindowControlsOverlayConfig::fromJson($data->windowControlsOverlayConfig);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->windowControlsOverlayConfig !== null) {
			$data->windowControlsOverlayConfig = $this->windowControlsOverlayConfig->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetShowWindowControlsOverlayRequestBuilder
	 */
	public static function builder(): SetShowWindowControlsOverlayRequestBuilder
	{
		return new SetShowWindowControlsOverlayRequestBuilder();
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
