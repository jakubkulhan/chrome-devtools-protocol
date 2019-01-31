<?php

namespace ChromeDevtoolsProtocol\Model\Input;

/**
 * Named type Input.TouchPoint.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TouchPoint implements \JsonSerializable
{
	/**
	 * X coordinate of the event relative to the main frame's viewport in CSS pixels.
	 *
	 * @var int|float
	 */
	public $x;

	/**
	 * Y coordinate of the event relative to the main frame's viewport in CSS pixels. 0 refers to the top of the viewport and Y increases as it proceeds towards the bottom of the viewport.
	 *
	 * @var int|float
	 */
	public $y;

	/**
	 * X radius of the touch area (default: 1.0).
	 *
	 * @var int|float|null
	 */
	public $radiusX;

	/**
	 * Y radius of the touch area (default: 1.0).
	 *
	 * @var int|float|null
	 */
	public $radiusY;

	/**
	 * Rotation angle (default: 0.0).
	 *
	 * @var int|float|null
	 */
	public $rotationAngle;

	/**
	 * Force (default: 1.0).
	 *
	 * @var int|float|null
	 */
	public $force;

	/**
	 * Identifier used to track touch sources between events, must be unique within an event.
	 *
	 * @var int|float|null
	 */
	public $id;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->x)) {
			$instance->x = $data->x;
		}
		if (isset($data->y)) {
			$instance->y = $data->y;
		}
		if (isset($data->radiusX)) {
			$instance->radiusX = $data->radiusX;
		}
		if (isset($data->radiusY)) {
			$instance->radiusY = $data->radiusY;
		}
		if (isset($data->rotationAngle)) {
			$instance->rotationAngle = $data->rotationAngle;
		}
		if (isset($data->force)) {
			$instance->force = $data->force;
		}
		if (isset($data->id)) {
			$instance->id = $data->id;
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
		if ($this->radiusX !== null) {
			$data->radiusX = $this->radiusX;
		}
		if ($this->radiusY !== null) {
			$data->radiusY = $this->radiusY;
		}
		if ($this->rotationAngle !== null) {
			$data->rotationAngle = $this->rotationAngle;
		}
		if ($this->force !== null) {
			$data->force = $this->force;
		}
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		return $data;
	}
}
