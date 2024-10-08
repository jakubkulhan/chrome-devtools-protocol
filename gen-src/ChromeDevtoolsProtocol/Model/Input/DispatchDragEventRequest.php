<?php

namespace ChromeDevtoolsProtocol\Model\Input;

/**
 * Request for Input.dispatchDragEvent command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DispatchDragEventRequest implements \JsonSerializable
{
	/**
	 * Type of the drag event.
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

	/** @var DragData */
	public $data;

	/**
	 * Bit field representing pressed modifier keys. Alt=1, Ctrl=2, Meta/Command=4, Shift=8 (default: 0).
	 *
	 * @var int|null
	 */
	public $modifiers;


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
		if (isset($data->data)) {
			$instance->data = DragData::fromJson($data->data);
		}
		if (isset($data->modifiers)) {
			$instance->modifiers = (int)$data->modifiers;
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
		if ($this->data !== null) {
			$data->data = $this->data->jsonSerialize();
		}
		if ($this->modifiers !== null) {
			$data->modifiers = $this->modifiers;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return DispatchDragEventRequestBuilder
	 */
	public static function builder(): DispatchDragEventRequestBuilder
	{
		return new DispatchDragEventRequestBuilder();
	}
}
