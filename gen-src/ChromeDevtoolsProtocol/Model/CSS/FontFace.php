<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Properties of a web font: https://www.w3.org/TR/2008/REC-CSS2-20080411/fonts.html#font-descriptions and additional information such as platformFontFamily and fontVariationAxes.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FontFace implements \JsonSerializable
{
	/**
	 * The font-family.
	 *
	 * @var string
	 */
	public $fontFamily;

	/**
	 * The font-style.
	 *
	 * @var string
	 */
	public $fontStyle;

	/**
	 * The font-variant.
	 *
	 * @var string
	 */
	public $fontVariant;

	/**
	 * The font-weight.
	 *
	 * @var string
	 */
	public $fontWeight;

	/**
	 * The font-stretch.
	 *
	 * @var string
	 */
	public $fontStretch;

	/**
	 * The font-display.
	 *
	 * @var string
	 */
	public $fontDisplay;

	/**
	 * The unicode-range.
	 *
	 * @var string
	 */
	public $unicodeRange;

	/**
	 * The src.
	 *
	 * @var string
	 */
	public $src;

	/**
	 * The resolved platform font family
	 *
	 * @var string
	 */
	public $platformFontFamily;

	/**
	 * Available variation settings (a.k.a. "axes").
	 *
	 * @var FontVariationAxis[]|null
	 */
	public $fontVariationAxes;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->fontFamily)) {
			$instance->fontFamily = (string)$data->fontFamily;
		}
		if (isset($data->fontStyle)) {
			$instance->fontStyle = (string)$data->fontStyle;
		}
		if (isset($data->fontVariant)) {
			$instance->fontVariant = (string)$data->fontVariant;
		}
		if (isset($data->fontWeight)) {
			$instance->fontWeight = (string)$data->fontWeight;
		}
		if (isset($data->fontStretch)) {
			$instance->fontStretch = (string)$data->fontStretch;
		}
		if (isset($data->fontDisplay)) {
			$instance->fontDisplay = (string)$data->fontDisplay;
		}
		if (isset($data->unicodeRange)) {
			$instance->unicodeRange = (string)$data->unicodeRange;
		}
		if (isset($data->src)) {
			$instance->src = (string)$data->src;
		}
		if (isset($data->platformFontFamily)) {
			$instance->platformFontFamily = (string)$data->platformFontFamily;
		}
		if (isset($data->fontVariationAxes)) {
			$instance->fontVariationAxes = [];
			foreach ($data->fontVariationAxes as $item) {
				$instance->fontVariationAxes[] = FontVariationAxis::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->fontFamily !== null) {
			$data->fontFamily = $this->fontFamily;
		}
		if ($this->fontStyle !== null) {
			$data->fontStyle = $this->fontStyle;
		}
		if ($this->fontVariant !== null) {
			$data->fontVariant = $this->fontVariant;
		}
		if ($this->fontWeight !== null) {
			$data->fontWeight = $this->fontWeight;
		}
		if ($this->fontStretch !== null) {
			$data->fontStretch = $this->fontStretch;
		}
		if ($this->fontDisplay !== null) {
			$data->fontDisplay = $this->fontDisplay;
		}
		if ($this->unicodeRange !== null) {
			$data->unicodeRange = $this->unicodeRange;
		}
		if ($this->src !== null) {
			$data->src = $this->src;
		}
		if ($this->platformFontFamily !== null) {
			$data->platformFontFamily = $this->platformFontFamily;
		}
		if ($this->fontVariationAxes !== null) {
			$data->fontVariationAxes = [];
			foreach ($this->fontVariationAxes as $item) {
				$data->fontVariationAxes[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
