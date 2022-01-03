<?php

namespace ChromeDevtoolsProtocol\Model\Animation;

/**
 * Event for each animation that has been created.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AnimationCreatedEvent implements \JsonSerializable
{
	/**
	 * Id of the animation that was created.
	 *
	 * @var string
	 */
	public $id;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->id)) {
			$instance->id = (string)$data->id;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		return $data;
	}
}
