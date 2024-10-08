<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Box model.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BoxModel implements \JsonSerializable
{
	/**
	 * Content box
	 *
	 * @var int[]|float[]
	 */
	public $content;

	/**
	 * Padding box
	 *
	 * @var int[]|float[]
	 */
	public $padding;

	/**
	 * Border box
	 *
	 * @var int[]|float[]
	 */
	public $border;

	/**
	 * Margin box
	 *
	 * @var int[]|float[]
	 */
	public $margin;

	/**
	 * Node width
	 *
	 * @var int
	 */
	public $width;

	/**
	 * Node height
	 *
	 * @var int
	 */
	public $height;

	/**
	 * Shape outside coordinates
	 *
	 * @var ShapeOutsideInfo|null
	 */
	public $shapeOutside;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->content)) {
			$instance->content = [];
			foreach ($data->content as $item) {
				$instance->content[] = $item;
			}
		}
		if (isset($data->padding)) {
			$instance->padding = [];
			foreach ($data->padding as $item) {
				$instance->padding[] = $item;
			}
		}
		if (isset($data->border)) {
			$instance->border = [];
			foreach ($data->border as $item) {
				$instance->border[] = $item;
			}
		}
		if (isset($data->margin)) {
			$instance->margin = [];
			foreach ($data->margin as $item) {
				$instance->margin[] = $item;
			}
		}
		if (isset($data->width)) {
			$instance->width = (int)$data->width;
		}
		if (isset($data->height)) {
			$instance->height = (int)$data->height;
		}
		if (isset($data->shapeOutside)) {
			$instance->shapeOutside = ShapeOutsideInfo::fromJson($data->shapeOutside);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->content !== null) {
			$data->content = [];
			foreach ($this->content as $item) {
				$data->content[] = $item;
			}
		}
		if ($this->padding !== null) {
			$data->padding = [];
			foreach ($this->padding as $item) {
				$data->padding[] = $item;
			}
		}
		if ($this->border !== null) {
			$data->border = [];
			foreach ($this->border as $item) {
				$data->border[] = $item;
			}
		}
		if ($this->margin !== null) {
			$data->margin = [];
			foreach ($this->margin as $item) {
				$data->margin[] = $item;
			}
		}
		if ($this->width !== null) {
			$data->width = $this->width;
		}
		if ($this->height !== null) {
			$data->height = $this->height;
		}
		if ($this->shapeOutside !== null) {
			$data->shapeOutside = $this->shapeOutside->jsonSerialize();
		}
		return $data;
	}
}
