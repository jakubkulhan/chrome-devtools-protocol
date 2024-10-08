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
	 * Set the current time of each animation.
	 *
	 * @var int|float
	 */
	public $currentTime;


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
