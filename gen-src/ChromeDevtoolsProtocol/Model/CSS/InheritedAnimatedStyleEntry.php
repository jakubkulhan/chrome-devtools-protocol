<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Inherited CSS style collection for animated styles from ancestor node.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InheritedAnimatedStyleEntry implements \JsonSerializable
{
	/**
	 * Styles coming from the animations of the ancestor, if any, in the style inheritance chain.
	 *
	 * @var CSSAnimationStyle[]|null
	 */
	public $animationStyles;

	/**
	 * The style coming from the transitions of the ancestor, if any, in the style inheritance chain.
	 *
	 * @var CSSStyle|null
	 */
	public $transitionsStyle;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->animationStyles)) {
			$instance->animationStyles = [];
			foreach ($data->animationStyles as $item) {
				$instance->animationStyles[] = CSSAnimationStyle::fromJson($item);
			}
		}
		if (isset($data->transitionsStyle)) {
			$instance->transitionsStyle = CSSStyle::fromJson($data->transitionsStyle);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->animationStyles !== null) {
			$data->animationStyles = [];
			foreach ($this->animationStyles as $item) {
				$data->animationStyles[] = $item->jsonSerialize();
			}
		}
		if ($this->transitionsStyle !== null) {
			$data->transitionsStyle = $this->transitionsStyle->jsonSerialize();
		}
		return $data;
	}
}
