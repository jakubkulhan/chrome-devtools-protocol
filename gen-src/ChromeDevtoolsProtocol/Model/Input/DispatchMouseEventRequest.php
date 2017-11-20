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
	 * @var string|null
	 */
	public $button;

	/**
	 * Number of times the mouse button was clicked (default: 0).
	 *
	 * @var int|null
	 */
	public $clickCount;

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
		if (isset($data->clickCount)) {
			$instance->clickCount = (int)$data->clickCount;
		}
		if (isset($data->deltaX)) {
			$instance->deltaX = $data->deltaX;
		}
		if (isset($data->deltaY)) {
			$instance->deltaY = $data->deltaY;
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
		if ($this->clickCount !== null) {
			$data->clickCount = $this->clickCount;
		}
		if ($this->deltaX !== null) {
			$data->deltaX = $this->deltaX;
		}
		if ($this->deltaY !== null) {
			$data->deltaY = $this->deltaY;
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
