<?php

namespace ChromeDevtoolsProtocol\Model\Input;

/**
 * Request for Input.dispatchMouseEvent command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DispatchMouseEventRequest implements \JsonSerializable
{
	/**
	 * Type of the mouse event.
	 *
	 * @var string
	 */
	public $type;

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
	 * Bit field representing pressed modifier keys. Alt=1, Ctrl=2, Meta/Command=4, Shift=8 (default: 0).
	 *
	 * @var int|null
	 */
	public $modifiers;

	/**
	 * Time at which the event occurred.
	 *
	 * @var int|float
	 */
	public $timestamp;

	/**
	 * Mouse button (default: "none").
	 *
	 * @var string
	 */
	public $button;

	/**
	 * A number indicating which buttons are pressed on the mouse when a mouse event is triggered. Left=1, Right=2, Middle=4, Back=8, Forward=16, None=0.
	 *
	 * @var int|null
	 */
	public $buttons;

	/**
	 * Number of times the mouse button was clicked (default: 0).
	 *
	 * @var int|null
	 */
	public $clickCount;

	/**
	 * The normalized pressure, which has a range of [0,1] (default: 0).
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
	 * The plane angle between the Y-Z plane and the plane containing both the stylus axis and the Y axis, in degrees of the range [-90,90], a positive tiltX is to the right (default: 0).
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
	 * X delta in CSS pixels for mouse wheel event (default: 0).
	 *
	 * @var int|float|null
	 */
	public $deltaX;

	/**
	 * Y delta in CSS pixels for mouse wheel event (default: 0).
	 *
	 * @var int|float|null
	 */
	public $deltaY;

	/**
	 * Pointer type (default: "mouse").
	 *
	 * @var string|null
	 */
	public $pointerType;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->x)) {
			$instance->x = $data->x;
		}
		if (isset($data->y)) {
			$instance->y = $data->y;
		}
		if (isset($data->modifiers)) {
			$instance->modifiers = (int)$data->modifiers;
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		if (isset($data->button)) {
			$instance->button = (string)$data->button;
		}
		if (isset($data->buttons)) {
			$instance->buttons = (int)$data->buttons;
		}
		if (isset($data->clickCount)) {
			$instance->clickCount = (int)$data->clickCount;
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
		if (isset($data->deltaX)) {
			$instance->deltaX = $data->deltaX;
		}
		if (isset($data->deltaY)) {
			$instance->deltaY = $data->deltaY;
		}
		if (isset($data->pointerType)) {
			$instance->pointerType = (string)$data->pointerType;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->x !== null) {
			$data->x = $this->x;
		}
		if ($this->y !== null) {
			$data->y = $this->y;
		}
		if ($this->modifiers !== null) {
			$data->modifiers = $this->modifiers;
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		if ($this->button !== null) {
			$data->button = $this->button;
		}
		if ($this->buttons !== null) {
			$data->buttons = $this->buttons;
		}
		if ($this->clickCount !== null) {
			$data->clickCount = $this->clickCount;
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
		if ($this->deltaX !== null) {
			$data->deltaX = $this->deltaX;
		}
		if ($this->deltaY !== null) {
			$data->deltaY = $this->deltaY;
		}
		if ($this->pointerType !== null) {
			$data->pointerType = $this->pointerType;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return DispatchMouseEventRequestBuilder
	 */
	public static function builder(): DispatchMouseEventRequestBuilder
	{
		return new DispatchMouseEventRequestBuilder();
	}
}
