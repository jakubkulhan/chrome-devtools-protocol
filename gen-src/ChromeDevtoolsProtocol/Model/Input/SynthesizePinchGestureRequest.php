<?php

namespace ChromeDevtoolsProtocol\Model\Input;

/**
 * Request for Input.synthesizePinchGesture command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SynthesizePinchGestureRequest implements \JsonSerializable
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
	 * Relative scale factor after zooming (>1.0 zooms in, <1.0 zooms out).
	 *
	 * @var int|float
	 */
	public $scaleFactor;

	/**
	 * Relative pointer speed in pixels per second (default: 800).
	 *
	 * @var int|null
	 */
	public $relativeSpeed;

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
		if (isset($data->scaleFactor)) {
			$instance->scaleFactor = $data->scaleFactor;
		}
		if (isset($data->relativeSpeed)) {
			$instance->relativeSpeed = (int)$data->relativeSpeed;
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
		if ($this->scaleFactor !== null) {
			$data->scaleFactor = $this->scaleFactor;
		}
		if ($this->relativeSpeed !== null) {
			$data->relativeSpeed = $this->relativeSpeed;
		}
		if ($this->gestureSourceType !== null) {
			$data->gestureSourceType = $this->gestureSourceType;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SynthesizePinchGestureRequestBuilder
	 */
	public static function builder(): SynthesizePinchGestureRequestBuilder
	{
		return new SynthesizePinchGestureRequestBuilder();
	}
}
