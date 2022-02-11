<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Information about font variation axes for variable fonts
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FontVariationAxis implements \JsonSerializable
{
	/**
	 * The font-variation-setting tag (a.k.a. "axis tag").
	 *
	 * @var string
	 */
	public $tag;

	/**
	 * Human-readable variation name in the default language (normally, "en").
	 *
	 * @var string
	 */
	public $name;

	/**
	 * The minimum value (inclusive) the font supports for this tag.
	 *
	 * @var int|float
	 */
	public $minValue;

	/**
	 * The maximum value (inclusive) the font supports for this tag.
	 *
	 * @var int|float
	 */
	public $maxValue;

	/**
	 * The default value.
	 *
	 * @var int|float
	 */
	public $defaultValue;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->tag)) {
			$instance->tag = (string)$data->tag;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->minValue)) {
			$instance->minValue = $data->minValue;
		}
		if (isset($data->maxValue)) {
			$instance->maxValue = $data->maxValue;
		}
		if (isset($data->defaultValue)) {
			$instance->defaultValue = $data->defaultValue;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->tag !== null) {
			$data->tag = $this->tag;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->minValue !== null) {
			$data->minValue = $this->minValue;
		}
		if ($this->maxValue !== null) {
			$data->maxValue = $this->maxValue;
		}
		if ($this->defaultValue !== null) {
			$data->defaultValue = $this->defaultValue;
		}
		return $data;
	}
}
