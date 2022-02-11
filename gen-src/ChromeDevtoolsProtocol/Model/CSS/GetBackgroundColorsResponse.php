<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.getBackgroundColors command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetBackgroundColorsResponse implements \JsonSerializable
{
	/**
	 * The range of background colors behind this element, if it contains any visible text. If no visible text is present, this will be undefined. In the case of a flat background color, this will consist of simply that color. In the case of a gradient, this will consist of each of the color stops. For anything more complicated, this will be an empty array. Images will be ignored (as if the image had failed to load).
	 *
	 * @var string[]|null
	 */
	public $backgroundColors;

	/**
	 * The computed font size for this node, as a CSS computed value string (e.g. '12px').
	 *
	 * @var string|null
	 */
	public $computedFontSize;

	/**
	 * The computed font weight for this node, as a CSS computed value string (e.g. 'normal' or '100').
	 *
	 * @var string|null
	 */
	public $computedFontWeight;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->backgroundColors)) {
			$instance->backgroundColors = [];
			foreach ($data->backgroundColors as $item) {
				$instance->backgroundColors[] = (string)$item;
			}
		}
		if (isset($data->computedFontSize)) {
			$instance->computedFontSize = (string)$data->computedFontSize;
		}
		if (isset($data->computedFontWeight)) {
			$instance->computedFontWeight = (string)$data->computedFontWeight;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->backgroundColors !== null) {
			$data->backgroundColors = [];
			foreach ($this->backgroundColors as $item) {
				$data->backgroundColors[] = $item;
			}
		}
		if ($this->computedFontSize !== null) {
			$data->computedFontSize = $this->computedFontSize;
		}
		if ($this->computedFontWeight !== null) {
			$data->computedFontWeight = $this->computedFontWeight;
		}
		return $data;
	}
}
