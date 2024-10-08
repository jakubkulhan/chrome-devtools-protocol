<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * CSS keyframes rule representation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CSSKeyframesRule implements \JsonSerializable
{
	/**
	 * Animation name.
	 *
	 * @var Value
	 */
	public $animationName;

	/**
	 * List of keyframes.
	 *
	 * @var CSSKeyframeRule[]
	 */
	public $keyframes;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->animationName)) {
			$instance->animationName = Value::fromJson($data->animationName);
		}
		if (isset($data->keyframes)) {
			$instance->keyframes = [];
			foreach ($data->keyframes as $item) {
				$instance->keyframes[] = CSSKeyframeRule::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->animationName !== null) {
			$data->animationName = $this->animationName->jsonSerialize();
		}
		if ($this->keyframes !== null) {
			$data->keyframes = [];
			foreach ($this->keyframes as $item) {
				$data->keyframes[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
