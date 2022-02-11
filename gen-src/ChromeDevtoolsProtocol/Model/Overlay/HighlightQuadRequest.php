<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Model\DOM\RGBA;

/**
 * Request for Overlay.highlightQuad command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HighlightQuadRequest implements \JsonSerializable
{
	/**
	 * Quad to highlight
	 *
	 * @var int[]|float[]
	 */
	public $quad;

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
		if (isset($data->quad)) {
			$instance->quad = [];
			foreach ($data->quad as $item) {
				$instance->quad[] = $item;
			}
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
		if ($this->quad !== null) {
			$data->quad = [];
			foreach ($this->quad as $item) {
				$data->quad[] = $item;
			}
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
	 * @return HighlightQuadRequestBuilder
	 */
	public static function builder(): HighlightQuadRequestBuilder
	{
		return new HighlightQuadRequestBuilder();
	}
}
