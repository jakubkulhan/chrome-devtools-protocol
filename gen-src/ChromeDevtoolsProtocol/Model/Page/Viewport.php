<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Viewport for capturing screenshot.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Viewport implements \JsonSerializable
{
	/**
	 * X offset in device independent pixels (dip).
	 *
	 * @var int|float
	 */
	public $x;

	/**
	 * Y offset in device independent pixels (dip).
	 *
	 * @var int|float
	 */
	public $y;

	/**
	 * Rectangle width in device independent pixels (dip).
	 *
	 * @var int|float
	 */
	public $width;

	/**
	 * Rectangle height in device independent pixels (dip).
	 *
	 * @var int|float
	 */
	public $height;

	/**
	 * Page scale factor.
	 *
	 * @var int|float
	 */
	public $scale;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->x)) {
			$instance->x = $data->x;
		}
		if (isset($data->y)) {
			$instance->y = $data->y;
		}
		if (isset($data->width)) {
			$instance->width = $data->width;
		}
		if (isset($data->height)) {
			$instance->height = $data->height;
		}
		if (isset($data->scale)) {
			$instance->scale = $data->scale;
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
		if ($this->scale !== null) {
			$data->scale = $this->scale;
		}
		return $data;
	}
}
