<?php

namespace ChromeDevtoolsProtocol\Model\Animation;

/**
 * Request for Animation.setTiming command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetTimingRequest implements \JsonSerializable
{
	/**
	 * Animation id.
	 *
	 * @var string
	 */
	public $animationId;

	/**
	 * Duration of the animation.
	 *
	 * @var int|float
	 */
	public $duration;

	/**
	 * Delay of the animation.
	 *
	 * @var int|float
	 */
	public $delay;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->animationId)) {
			$instance->animationId = (string)$data->animationId;
		}
		if (isset($data->duration)) {
			$instance->duration = $data->duration;
		}
		if (isset($data->delay)) {
			$instance->delay = $data->delay;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->animationId !== null) {
			$data->animationId = $this->animationId;
		}
		if ($this->duration !== null) {
			$data->duration = $this->duration;
		}
		if ($this->delay !== null) {
			$data->delay = $this->delay;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetTimingRequestBuilder
	 */
	public static function builder(): SetTimingRequestBuilder
	{
		return new SetTimingRequestBuilder();
	}
}
