<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Model\DOM\RGBA;

/**
 * Request for Overlay.highlightRect command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HighlightRectRequest implements \JsonSerializable
{
	/**
	 * X coordinate
	 *
	 * @var int
	 */
	public $x;

	/**
	 * Y coordinate
	 *
	 * @var int
	 */
	public $y;

	/**
	 * Rectangle width
	 *
	 * @var int
	 */
	public $width;

	/**
	 * Rectangle height
	 *
	 * @var int
	 */
	public $height;

	/**
	 * The highlight fill color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $color;

	/**
	 * The highlight outline color (default: transparent).
	 *
	 * @var RGBA|null
	 */
	public $outlineColor;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->x)) {
			$instance->x = (int)$data->x;
		}
		if (isset($data->y)) {
			$instance->y = (int)$data->y;
		}
		if (isset($data->width)) {
			$instance->width = (int)$data->width;
		}
		if (isset($data->height)) {
			$instance->height = (int)$data->height;
		}
		if (isset($data->color)) {
			$instance->color = RGBA::fromJson($data->color);
		}
		if (isset($data->outlineColor)) {
			$instance->outlineColor = RGBA::fromJson($data->outlineColor);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->x !== null) {
			$data->x = $this->x;
		}
		if ($this->y !== null) {
			$data->y = $this->y;
		}
		if ($this->width !== null) {
			$data->width = $this->width;
		}
		if ($this->height !== null) {
			$data->height = $this->height;
		}
		if ($this->color !== null) {
			$data->color = $this->color->jsonSerialize();
		}
		if ($this->outlineColor !== null) {
			$data->outlineColor = $this->outlineColor->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return HighlightRectRequestBuilder
	 */
	public static function builder(): HighlightRectRequestBuilder
	{
		return new HighlightRectRequestBuilder();
	}
}
