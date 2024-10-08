<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Model\DOM\RGBA;
use ChromeDevtoolsProtocol\Model\DOM\Rect;

/**
 * Configuration for dual screen hinge
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HingeConfig implements \JsonSerializable
{
	/**
	 * A rectangle represent hinge
	 *
	 * @var Rect
	 */
	public $rect;

	/**
	 * The content box highlight fill color (default: a dark color).
	 *
	 * @var RGBA|null
	 */
	public $contentColor;

	/**
	 * The content box highlight outline color (default: transparent).
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
		if (isset($data->rect)) {
			$instance->rect = Rect::fromJson($data->rect);
		}
		if (isset($data->contentColor)) {
			$instance->contentColor = RGBA::fromJson($data->contentColor);
		}
		if (isset($data->outlineColor)) {
			$instance->outlineColor = RGBA::fromJson($data->outlineColor);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->rect !== null) {
			$data->rect = $this->rect->jsonSerialize();
		}
		if ($this->contentColor !== null) {
			$data->contentColor = $this->contentColor->jsonSerialize();
		}
		if ($this->outlineColor !== null) {
			$data->outlineColor = $this->outlineColor->jsonSerialize();
		}
		return $data;
	}
}
