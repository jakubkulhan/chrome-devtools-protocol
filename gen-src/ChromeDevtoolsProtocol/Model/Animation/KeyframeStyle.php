<?php

namespace ChromeDevtoolsProtocol\Model\Animation;

/**
 * Keyframe Style
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class KeyframeStyle implements \JsonSerializable
{
	/**
	 * Keyframe's time offset.
	 *
	 * @var string
	 */
	public $offset;

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
		if (isset($data->offset)) {
			$instance->offset = (string)$data->offset;
		}
		if (isset($data->easing)) {
			$instance->easing = (string)$data->easing;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->offset !== null) {
			$data->offset = $this->offset;
		}
		if ($this->easing !== null) {
			$data->easing = $this->easing;
		}
		return $data;
	}
}
