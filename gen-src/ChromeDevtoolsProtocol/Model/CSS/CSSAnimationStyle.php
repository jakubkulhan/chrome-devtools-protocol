<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * CSS style coming from animations with the name of the animation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CSSAnimationStyle implements \JsonSerializable
{
	/**
	 * The name of the animation.
	 *
	 * @var string|null
	 */
	public $name;

	/**
	 * The style coming from the animation.
	 *
	 * @var CSSStyle
	 */
	public $style;


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
		if (isset($data->style)) {
			$instance->style = CSSStyle::fromJson($data->style);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->style !== null) {
			$data->style = $this->style->jsonSerialize();
		}
		return $data;
	}
}
