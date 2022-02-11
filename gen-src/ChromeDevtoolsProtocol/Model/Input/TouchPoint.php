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
	 * The normalized tangential pressure, which has a range of [-1,1] (default: 0).
	 *
	 * @var int|float|null
	 */
	public $tangentialPressure;

	/**
	 * The plane angle between the Y-Z plane and the plane containing both the stylus axis and the Y axis, in degrees of the range [-90,90], a positive tiltX is to the right (default: 0)
	 *
	 * @var int|null
	 */
	public $tiltX;

	/**
	 * The plane angle between the X-Z plane and the plane containing both the stylus axis and the X axis, in degrees of the range [-90,90], a positive tiltY is towards the user (default: 0).
	 *
	 * @var int|null
	 */
	public $tiltY;

	/**
	 * The clockwise rotation of a pen stylus around its own major axis, in degrees in the range [0,359] (default: 0).
	 *
	 * @var int|null
	 */
	public $twist;

	/**
	 * Identifier used to track touch sources between events, must be unique within an event.
	 *
	 * @var int|float|null
	 */
	public $id;


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
		if (isset($data->tangentialPressure)) {
			$instance->tangentialPressure = $data->tangentialPressure;
		}
		if (isset($data->tiltX)) {
			$instance->tiltX = (int)$data->tiltX;
		}
		if (isset($data->tiltY)) {
			$instance->tiltY = (int)$data->tiltY;
		}
		if (isset($data->twist)) {
			$instance->twist = (int)$data->twist;
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
		if ($this->tangentialPressure !== null) {
			$data->tangentialPressure = $this->tangentialPressure;
		}
		if ($this->tiltX !== null) {
			$data->tiltX = $this->tiltX;
		}
		if ($this->tiltY !== null) {
			$data->tiltY = $this->tiltY;
		}
		if ($this->twist !== null) {
			$data->twist = $this->twist;
		}
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		return $data;
	}
}
