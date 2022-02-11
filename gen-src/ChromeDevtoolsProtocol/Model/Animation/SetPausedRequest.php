<?php

namespace ChromeDevtoolsProtocol\Model\Animation;

/**
 * Request for Animation.setPaused command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPausedRequest implements \JsonSerializable
{
	/**
	 * Animations to set the pause state of.
	 *
	 * @var string[]
	 */
	public $animations;

	/**
	 * Paused state to set to.
	 *
	 * @var bool
	 */
	public $paused;


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
		if (isset($data->paused)) {
			$instance->paused = (bool)$data->paused;
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
		if ($this->paused !== null) {
			$data->paused = $this->paused;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetPausedRequestBuilder
	 */
	public static function builder(): SetPausedRequestBuilder
	{
		return new SetPausedRequestBuilder();
	}
}
