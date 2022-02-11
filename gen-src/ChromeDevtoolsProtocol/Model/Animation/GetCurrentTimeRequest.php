<?php

namespace ChromeDevtoolsProtocol\Model\Animation;

/**
 * Request for Animation.getCurrentTime command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetCurrentTimeRequest implements \JsonSerializable
{
	/**
	 * Id of animation.
	 *
	 * @var string
	 */
	public $id;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->id)) {
			$instance->id = (string)$data->id;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetCurrentTimeRequestBuilder
	 */
	public static function builder(): GetCurrentTimeRequestBuilder
	{
		return new GetCurrentTimeRequestBuilder();
	}
}
