<?php

namespace ChromeDevtoolsProtocol\Model\Animation;

/**
 * Request for Animation.releaseAnimations command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReleaseAnimationsRequest implements \JsonSerializable
{
	/**
	 * List of animation ids to seek.
	 *
	 * @var string[]
	 */
	public $animations;


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
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ReleaseAnimationsRequestBuilder
	 */
	public static function builder(): ReleaseAnimationsRequestBuilder
	{
		return new ReleaseAnimationsRequestBuilder();
	}
}
