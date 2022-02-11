<?php

namespace ChromeDevtoolsProtocol\Model\Animation;

/**
 * Keyframes Rule
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class KeyframesRule implements \JsonSerializable
{
	/**
	 * CSS keyframed animation's name.
	 *
	 * @var string|null
	 */
	public $name;

	/**
	 * List of animation keyframes.
	 *
	 * @var KeyframeStyle[]
	 */
	public $keyframes;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->keyframes)) {
			$instance->keyframes = [];
			foreach ($data->keyframes as $item) {
				$instance->keyframes[] = KeyframeStyle::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
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
