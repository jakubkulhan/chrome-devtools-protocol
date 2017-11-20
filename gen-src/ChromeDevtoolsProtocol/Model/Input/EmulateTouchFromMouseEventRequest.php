<?php
namespace ChromeDevtoolsProtocol\Model\Input;

/**
 * Request for Input.emulateTouchFromMouseEvent command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EmulateTouchFromMouseEventRequest implements \JsonSerializable
{
	/**
	 * Type of the mouse event.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * X coordinate of the mouse pointer in DIP.
	 *
	 * @var int
	 */
	public $x;

	/**
	 * Y coordinate of the mouse pointer in DIP.
	 *
	 * @var int
	 */
	public $y;

	/**
	 * Time at which the event occurred.
	 *
	 * @var int|float
	 */
	public $timestamp;

	/**
	 * Mouse button.
	 *
	 * @var string
	 */
	public $button;

	/**
	 * X delta in DIP for mouse wheel event (default: 0).
	 *
	 * @var int|float|null
	 */
	public $deltaX;

	/**
	 * Y delta in DIP for mouse wheel event (default: 0).
	 *
	 * @var int|float|null
	 */
	public $deltaY;

	/**
	 * Bit field representing pressed modifier keys. Alt=1, Ctrl=2, Meta/Command=4, Shift=8 (default: 0).
	 *
	 * @var int|null
	 */
	public $modifiers;

	/**
	 * Number of times the mouse button was clicked (default: 0).
	 *
	 * @var int|null
	 */
	public $clickCount;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->x)) {
			$instance->x = (int)$data->x;
		}
		if (isset($data->y)) {
			$instance->y = (int)$data->y;
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		if (isset($data->button)) {
			$instance->button = (string)$data->button;
		}
		if (isset($data->deltaX)) {
			$instance->deltaX = $data->deltaX;
		}
		if (isset($data->deltaY)) {
			$instance->deltaY = $data->deltaY;
		}
		if (isset($data->modifiers)) {
			$instance->modifiers = (int)$data->modifiers;
		}
		if (isset($data->clickCount)) {
			$instance->clickCount = (int)$data->clickCount;
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
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		if ($this->button !== null) {
			$data->button = $this->button;
		}
		if ($this->deltaX !== null) {
			$data->deltaX = $this->deltaX;
		}
		if ($this->deltaY !== null) {
			$data->deltaY = $this->deltaY;
		}
		if ($this->modifiers !== null) {
			$data->modifiers = $this->modifiers;
		}
		if ($this->clickCount !== null) {
			$data->clickCount = $this->clickCount;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return EmulateTouchFromMouseEventRequestBuilder
	 */
	public static function builder(): EmulateTouchFromMouseEventRequestBuilder
	{
		return new EmulateTouchFromMouseEventRequestBuilder();
	}
}
