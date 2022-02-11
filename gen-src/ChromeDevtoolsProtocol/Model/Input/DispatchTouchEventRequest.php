<?php

namespace ChromeDevtoolsProtocol\Model\Input;

/**
 * Request for Input.dispatchTouchEvent command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DispatchTouchEventRequest implements \JsonSerializable
{
	/**
	 * Type of the touch event. TouchEnd and TouchCancel must not contain any touch points, while TouchStart and TouchMove must contains at least one.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Active touch points on the touch device. One event per any changed point (compared to previous touch event in a sequence) is generated, emulating pressing/moving/releasing points one by one.
	 *
	 * @var TouchPoint[]
	 */
	public $touchPoints;

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
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->touchPoints)) {
			$instance->touchPoints = [];
			foreach ($data->touchPoints as $item) {
				$instance->touchPoints[] = TouchPoint::fromJson($item);
			}
		}
		if (isset($data->modifiers)) {
			$instance->modifiers = (int)$data->modifiers;
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->touchPoints !== null) {
			$data->touchPoints = [];
			foreach ($this->touchPoints as $item) {
				$data->touchPoints[] = $item->jsonSerialize();
			}
		}
		if ($this->modifiers !== null) {
			$data->modifiers = $this->modifiers;
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return DispatchTouchEventRequestBuilder
	 */
	public static function builder(): DispatchTouchEventRequestBuilder
	{
		return new DispatchTouchEventRequestBuilder();
	}
}
