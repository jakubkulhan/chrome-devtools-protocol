<?php

namespace ChromeDevtoolsProtocol\Model\Animation;

/**
 * AnimationEffect instance
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AnimationEffect implements \JsonSerializable
{
	/**
	 * `AnimationEffect`'s delay.
	 *
	 * @var int|float
	 */
	public $delay;

	/**
	 * `AnimationEffect`'s end delay.
	 *
	 * @var int|float
	 */
	public $endDelay;

	/**
	 * `AnimationEffect`'s iteration start.
	 *
	 * @var int|float
	 */
	public $iterationStart;

	/**
	 * `AnimationEffect`'s iterations.
	 *
	 * @var int|float
	 */
	public $iterations;

	/**
	 * `AnimationEffect`'s iteration duration.
	 *
	 * @var int|float
	 */
	public $duration;

	/**
	 * `AnimationEffect`'s playback direction.
	 *
	 * @var string
	 */
	public $direction;

	/**
	 * `AnimationEffect`'s fill mode.
	 *
	 * @var string
	 */
	public $fill;

	/**
	 * `AnimationEffect`'s target node.
	 *
	 * @var int
	 */
	public $backendNodeId;

	/**
	 * `AnimationEffect`'s keyframes.
	 *
	 * @var KeyframesRule|null
	 */
	public $keyframesRule;

	/**
	 * `AnimationEffect`'s timing function.
	 *
	 * @var string
	 */
	public $easing;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->delay)) {
			$instance->delay = $data->delay;
		}
		if (isset($data->endDelay)) {
			$instance->endDelay = $data->endDelay;
		}
		if (isset($data->iterationStart)) {
			$instance->iterationStart = $data->iterationStart;
		}
		if (isset($data->iterations)) {
			$instance->iterations = $data->iterations;
		}
		if (isset($data->duration)) {
			$instance->duration = $data->duration;
		}
		if (isset($data->direction)) {
			$instance->direction = (string)$data->direction;
		}
		if (isset($data->fill)) {
			$instance->fill = (string)$data->fill;
		}
		if (isset($data->backendNodeId)) {
			$instance->backendNodeId = (int)$data->backendNodeId;
		}
		if (isset($data->keyframesRule)) {
			$instance->keyframesRule = KeyframesRule::fromJson($data->keyframesRule);
		}
		if (isset($data->easing)) {
			$instance->easing = (string)$data->easing;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->delay !== null) {
			$data->delay = $this->delay;
		}
		if ($this->endDelay !== null) {
			$data->endDelay = $this->endDelay;
		}
		if ($this->iterationStart !== null) {
			$data->iterationStart = $this->iterationStart;
		}
		if ($this->iterations !== null) {
			$data->iterations = $this->iterations;
		}
		if ($this->duration !== null) {
			$data->duration = $this->duration;
		}
		if ($this->direction !== null) {
			$data->direction = $this->direction;
		}
		if ($this->fill !== null) {
			$data->fill = $this->fill;
		}
		if ($this->backendNodeId !== null) {
			$data->backendNodeId = $this->backendNodeId;
		}
		if ($this->keyframesRule !== null) {
			$data->keyframesRule = $this->keyframesRule->jsonSerialize();
		}
		if ($this->easing !== null) {
			$data->easing = $this->easing;
		}
		return $data;
	}
}
