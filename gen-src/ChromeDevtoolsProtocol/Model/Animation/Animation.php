<?php
namespace ChromeDevtoolsProtocol\Model\Animation;

/**
 * Animation instance.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Animation implements \JsonSerializable
{
	/**
	 * <code>Animation</code>'s id.
	 *
	 * @var string
	 */
	public $id;

	/**
	 * <code>Animation</code>'s name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * <code>Animation</code>'s internal paused state.
	 *
	 * @var bool
	 */
	public $pausedState;

	/**
	 * <code>Animation</code>'s play state.
	 *
	 * @var string
	 */
	public $playState;

	/**
	 * <code>Animation</code>'s playback rate.
	 *
	 * @var int|float
	 */
	public $playbackRate;

	/**
	 * <code>Animation</code>'s start time.
	 *
	 * @var int|float
	 */
	public $startTime;

	/**
	 * <code>Animation</code>'s current time.
	 *
	 * @var int|float
	 */
	public $currentTime;

	/**
	 * Animation type of <code>Animation</code>.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * <code>Animation</code>'s source animation node.
	 *
	 * @var AnimationEffect|null
	 */
	public $source;

	/**
	 * A unique ID for <code>Animation</code> representing the sources that triggered this CSS animation/transition.
	 *
	 * @var string|null
	 */
	public $cssId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->id)) {
			$instance->id = (string)$data->id;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->pausedState)) {
			$instance->pausedState = (bool)$data->pausedState;
		}
		if (isset($data->playState)) {
			$instance->playState = (string)$data->playState;
		}
		if (isset($data->playbackRate)) {
			$instance->playbackRate = $data->playbackRate;
		}
		if (isset($data->startTime)) {
			$instance->startTime = $data->startTime;
		}
		if (isset($data->currentTime)) {
			$instance->currentTime = $data->currentTime;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->source)) {
			$instance->source = AnimationEffect::fromJson($data->source);
		}
		if (isset($data->cssId)) {
			$instance->cssId = (string)$data->cssId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->pausedState !== null) {
			$data->pausedState = $this->pausedState;
		}
		if ($this->playState !== null) {
			$data->playState = $this->playState;
		}
		if ($this->playbackRate !== null) {
			$data->playbackRate = $this->playbackRate;
		}
		if ($this->startTime !== null) {
			$data->startTime = $this->startTime;
		}
		if ($this->currentTime !== null) {
			$data->currentTime = $this->currentTime;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->source !== null) {
			$data->source = $this->source->jsonSerialize();
		}
		if ($this->cssId !== null) {
			$data->cssId = $this->cssId;
		}
		return $data;
	}
}
