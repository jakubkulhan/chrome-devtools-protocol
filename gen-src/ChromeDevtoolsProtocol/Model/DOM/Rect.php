<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * Rectangle.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Rect implements \JsonSerializable
{
	/**
	 * X coordinate
	 *
	 * @var int|float
	 */
	public $x;

	/**
	 * Y coordinate
	 *
	 * @var int|float
	 */
	public $y;

	/**
	 * Rectangle width
	 *
	 * @var int|float
	 */
	public $width;

	/**
	 * Rectangle height
	 *
	 * @var int|float
	 */
	public $height;


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
		return $data;
	}
}
