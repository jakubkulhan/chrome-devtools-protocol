<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.getAnimatedStylesForNode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAnimatedStylesForNodeResponse implements \JsonSerializable
{
	/**
	 * Styles coming from animations.
	 *
	 * @var CSSAnimationStyle[]|null
	 */
	public $animationStyles;

	/**
	 * Style coming from transitions.
	 *
	 * @var CSSStyle|null
	 */
	public $transitionsStyle;

	/**
	 * Inherited style entries for animationsStyle and transitionsStyle from the inheritance chain of the element.
	 *
	 * @var InheritedAnimatedStyleEntry[]|null
	 */
	public $inherited;


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
		if (isset($data->inherited)) {
			$instance->inherited = [];
			foreach ($data->inherited as $item) {
				$instance->inherited[] = InheritedAnimatedStyleEntry::fromJson($item);
			}
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
		if ($this->inherited !== null) {
			$data->inherited = [];
			foreach ($this->inherited as $item) {
				$data->inherited[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
