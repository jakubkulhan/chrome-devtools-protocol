<?php

namespace ChromeDevtoolsProtocol\Model\Animation;

/**
 * Request for Animation.seekAnimations command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SeekAnimationsRequest implements \JsonSerializable
{
	/**
	 * List of animation ids to seek.
	 *
	 * @var string[]
	 */
	public $animations;

	/**
	 * Set each animation to the same time.
	 *
	 * @var int|float|null
	 */
	public $currentTime;

	/**
	 * Set each animation to a different time. If set, should have the same length as animations. Exactly one of currentTime or currentTimes should be set.
	 *
	 * @var int[]|float[]|null
	 */
	public $currentTimes;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->animations)) {
			$instance->animations = [];
			foreach ($data->animations as $item) {
				$instance->animations[] = (string)$item;
			}
		}
		if (isset($data->currentTime)) {
			$instance->currentTime = $data->currentTime;
		}
		if (isset($data->currentTimes)) {
			$instance->currentTimes = [];
			foreach ($data->currentTimes as $item) {
				$instance->currentTimes[] = $item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->animations !== null) {
			$data->animations = [];
			foreach ($this->animations as $item) {
				$data->animations[] = $item;
			}
		}
		if ($this->currentTime !== null) {
			$data->currentTime = $this->currentTime;
		}
		if ($this->currentTimes !== null) {
			$data->currentTimes = [];
			foreach ($this->currentTimes as $item) {
				$data->currentTimes[] = $item;
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SeekAnimationsRequestBuilder
	 */
	public static function builder(): SeekAnimationsRequestBuilder
	{
		return new SeekAnimationsRequestBuilder();
	}
}
