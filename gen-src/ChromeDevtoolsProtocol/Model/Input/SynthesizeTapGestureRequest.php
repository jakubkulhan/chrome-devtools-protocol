<?php

namespace ChromeDevtoolsProtocol\Model\Input;

/**
 * Request for Input.synthesizeTapGesture command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SynthesizeTapGestureRequest implements \JsonSerializable
{
	/**
	 * X coordinate of the start of the gesture in CSS pixels.
	 *
	 * @var int|float
	 */
	public $x;

	/**
	 * Y coordinate of the start of the gesture in CSS pixels.
	 *
	 * @var int|float
	 */
	public $y;

	/**
	 * Duration between touchdown and touchup events in ms (default: 50).
	 *
	 * @var int|null
	 */
	public $duration;

	/**
	 * Number of times to perform the tap (e.g. 2 for double tap, default: 1).
	 *
	 * @var int|null
	 */
	public $tapCount;

	/**
	 * Which type of input events to be generated (default: 'default', which queries the platform for the preferred input type).
	 *
	 * @var string
	 */
	public $gestureSourceType;


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
		if (isset($data->duration)) {
			$instance->duration = (int)$data->duration;
		}
		if (isset($data->tapCount)) {
			$instance->tapCount = (int)$data->tapCount;
		}
		if (isset($data->gestureSourceType)) {
			$instance->gestureSourceType = (string)$data->gestureSourceType;
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
		if ($this->duration !== null) {
			$data->duration = $this->duration;
		}
		if ($this->tapCount !== null) {
			$data->tapCount = $this->tapCount;
		}
		if ($this->gestureSourceType !== null) {
			$data->gestureSourceType = $this->gestureSourceType;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SynthesizeTapGestureRequestBuilder
	 */
	public static function builder(): SynthesizeTapGestureRequestBuilder
	{
		return new SynthesizeTapGestureRequestBuilder();
	}
}
