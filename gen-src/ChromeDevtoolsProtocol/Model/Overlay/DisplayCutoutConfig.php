<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Model\DOM\RGBA;
use ChromeDevtoolsProtocol\Model\DOM\Rect;

/**
 * Configuration for a display cutout.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DisplayCutoutConfig implements \JsonSerializable
{
	/**
	 * A rectangle representing the cutout bounds.
	 *
	 * @var Rect
	 */
	public $rect;

	/**
	 * Shape used to draw the cutout.
	 *
	 * @var string
	 */
	public $shape;

	/**
	 * Border radius for rounded cutout shapes.
	 *
	 * @var int|null
	 */
	public $borderRadius;

	/**
	 * Upper shoulder radius for notch cutout shapes.
	 *
	 * @var int|null
	 */
	public $upperRadius;

	/**
	 * Lower transition radius for notch cutout shapes.
	 *
	 * @var int|null
	 */
	public $lowerRadius;

	/**
	 * Center x coordinate for circle cutout shapes.
	 *
	 * @var int|null
	 */
	public $cx;

	/**
	 * Center y coordinate for circle cutout shapes.
	 *
	 * @var int|null
	 */
	public $cy;

	/**
	 * Radius for circle cutout shapes.
	 *
	 * @var int|null
	 */
	public $radius;

	/**
	 * The cutout fill color (default: black).
	 *
	 * @var RGBA|null
	 */
	public $contentColor;


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
		if (isset($data->shape)) {
			$instance->shape = (string)$data->shape;
		}
		if (isset($data->borderRadius)) {
			$instance->borderRadius = (int)$data->borderRadius;
		}
		if (isset($data->upperRadius)) {
			$instance->upperRadius = (int)$data->upperRadius;
		}
		if (isset($data->lowerRadius)) {
			$instance->lowerRadius = (int)$data->lowerRadius;
		}
		if (isset($data->cx)) {
			$instance->cx = (int)$data->cx;
		}
		if (isset($data->cy)) {
			$instance->cy = (int)$data->cy;
		}
		if (isset($data->radius)) {
			$instance->radius = (int)$data->radius;
		}
		if (isset($data->contentColor)) {
			$instance->contentColor = RGBA::fromJson($data->contentColor);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->rect !== null) {
			$data->rect = $this->rect->jsonSerialize();
		}
		if ($this->shape !== null) {
			$data->shape = $this->shape;
		}
		if ($this->borderRadius !== null) {
			$data->borderRadius = $this->borderRadius;
		}
		if ($this->upperRadius !== null) {
			$data->upperRadius = $this->upperRadius;
		}
		if ($this->lowerRadius !== null) {
			$data->lowerRadius = $this->lowerRadius;
		}
		if ($this->cx !== null) {
			$data->cx = $this->cx;
		}
		if ($this->cy !== null) {
			$data->cy = $this->cy;
		}
		if ($this->radius !== null) {
			$data->radius = $this->radius;
		}
		if ($this->contentColor !== null) {
			$data->contentColor = $this->contentColor->jsonSerialize();
		}
		return $data;
	}
}
