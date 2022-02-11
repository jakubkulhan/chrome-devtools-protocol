<?php

namespace ChromeDevtoolsProtocol\Model\Input;

/**
 * Request for Input.synthesizeScrollGesture command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SynthesizeScrollGestureRequest implements \JsonSerializable
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
	 * The distance to scroll along the X axis (positive to scroll left).
	 *
	 * @var int|float|null
	 */
	public $xDistance;

	/**
	 * The distance to scroll along the Y axis (positive to scroll up).
	 *
	 * @var int|float|null
	 */
	public $yDistance;

	/**
	 * The number of additional pixels to scroll back along the X axis, in addition to the given distance.
	 *
	 * @var int|float|null
	 */
	public $xOverscroll;

	/**
	 * The number of additional pixels to scroll back along the Y axis, in addition to the given distance.
	 *
	 * @var int|float|null
	 */
	public $yOverscroll;

	/**
	 * Prevent fling (default: true).
	 *
	 * @var bool|null
	 */
	public $preventFling;

	/**
	 * Swipe speed in pixels per second (default: 800).
	 *
	 * @var int|null
	 */
	public $speed;

	/**
	 * Which type of input events to be generated (default: 'default', which queries the platform for the preferred input type).
	 *
	 * @var string
	 */
	public $gestureSourceType;

	/**
	 * The number of times to repeat the gesture (default: 0).
	 *
	 * @var int|null
	 */
	public $repeatCount;

	/**
	 * The number of milliseconds delay between each repeat. (default: 250).
	 *
	 * @var int|null
	 */
	public $repeatDelayMs;

	/**
	 * The name of the interaction markers to generate, if not empty (default: "").
	 *
	 * @var string|null
	 */
	public $interactionMarkerName;


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
		if (isset($data->xDistance)) {
			$instance->xDistance = $data->xDistance;
		}
		if (isset($data->yDistance)) {
			$instance->yDistance = $data->yDistance;
		}
		if (isset($data->xOverscroll)) {
			$instance->xOverscroll = $data->xOverscroll;
		}
		if (isset($data->yOverscroll)) {
			$instance->yOverscroll = $data->yOverscroll;
		}
		if (isset($data->preventFling)) {
			$instance->preventFling = (bool)$data->preventFling;
		}
		if (isset($data->speed)) {
			$instance->speed = (int)$data->speed;
		}
		if (isset($data->gestureSourceType)) {
			$instance->gestureSourceType = (string)$data->gestureSourceType;
		}
		if (isset($data->repeatCount)) {
			$instance->repeatCount = (int)$data->repeatCount;
		}
		if (isset($data->repeatDelayMs)) {
			$instance->repeatDelayMs = (int)$data->repeatDelayMs;
		}
		if (isset($data->interactionMarkerName)) {
			$instance->interactionMarkerName = (string)$data->interactionMarkerName;
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
		if ($this->xDistance !== null) {
			$data->xDistance = $this->xDistance;
		}
		if ($this->yDistance !== null) {
			$data->yDistance = $this->yDistance;
		}
		if ($this->xOverscroll !== null) {
			$data->xOverscroll = $this->xOverscroll;
		}
		if ($this->yOverscroll !== null) {
			$data->yOverscroll = $this->yOverscroll;
		}
		if ($this->preventFling !== null) {
			$data->preventFling = $this->preventFling;
		}
		if ($this->speed !== null) {
			$data->speed = $this->speed;
		}
		if ($this->gestureSourceType !== null) {
			$data->gestureSourceType = $this->gestureSourceType;
		}
		if ($this->repeatCount !== null) {
			$data->repeatCount = $this->repeatCount;
		}
		if ($this->repeatDelayMs !== null) {
			$data->repeatDelayMs = $this->repeatDelayMs;
		}
		if ($this->interactionMarkerName !== null) {
			$data->interactionMarkerName = $this->interactionMarkerName;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SynthesizeScrollGestureRequestBuilder
	 */
	public static function builder(): SynthesizeScrollGestureRequestBuilder
	{
		return new SynthesizeScrollGestureRequestBuilder();
	}
}
