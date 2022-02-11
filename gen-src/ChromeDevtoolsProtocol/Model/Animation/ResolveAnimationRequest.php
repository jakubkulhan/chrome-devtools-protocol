<?php

namespace ChromeDevtoolsProtocol\Model\Animation;

/**
 * Request for Animation.resolveAnimation command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ResolveAnimationRequest implements \JsonSerializable
{
	/**
	 * Animation id.
	 *
	 * @var string
	 */
	public $animationId;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->animationId !== null) {
			$data->animationId = $this->animationId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ResolveAnimationRequestBuilder
	 */
	public static function builder(): ResolveAnimationRequestBuilder
	{
		return new ResolveAnimationRequestBuilder();
	}
}
