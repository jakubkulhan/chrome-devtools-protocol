<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * CSS property declaration data.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CSSProperty implements \JsonSerializable
{
	/**
	 * The property name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * The property value.
	 *
	 * @var string
	 */
	public $value;

	/**
	 * Whether the property has "!important" annotation (implies `false` if absent).
	 *
	 * @var bool|null
	 */
	public $important;

	/**
	 * Whether the property is implicit (implies `false` if absent).
	 *
	 * @var bool|null
	 */
	public $implicit;

	/**
	 * The full property text as specified in the style.
	 *
	 * @var string|null
	 */
	public $text;

	/**
	 * Whether the property is understood by the browser (implies `true` if absent).
	 *
	 * @var bool|null
	 */
	public $parsedOk;

	/**
	 * Whether the property is disabled by the user (present for source-based properties only).
	 *
	 * @var bool|null
	 */
	public $disabled;

	/**
	 * The entire property range in the enclosing style declaration (if available).
	 *
	 * @var SourceRange|null
	 */
	public $range;

	/**
	 * Parsed longhand components of this property if it is a shorthand. This field will be empty if the given property is not a shorthand.
	 *
	 * @var CSSProperty[]|null
	 */
	public $longhandProperties;


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
		if (isset($data->value)) {
			$instance->value = (string)$data->value;
		}
		if (isset($data->important)) {
			$instance->important = (bool)$data->important;
		}
		if (isset($data->implicit)) {
			$instance->implicit = (bool)$data->implicit;
		}
		if (isset($data->text)) {
			$instance->text = (string)$data->text;
		}
		if (isset($data->parsedOk)) {
			$instance->parsedOk = (bool)$data->parsedOk;
		}
		if (isset($data->disabled)) {
			$instance->disabled = (bool)$data->disabled;
		}
		if (isset($data->range)) {
			$instance->range = SourceRange::fromJson($data->range);
		}
		if (isset($data->longhandProperties)) {
			$instance->longhandProperties = [];
			foreach ($data->longhandProperties as $item) {
				$instance->longhandProperties[] = CSSProperty::fromJson($item);
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
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		if ($this->important !== null) {
			$data->important = $this->important;
		}
		if ($this->implicit !== null) {
			$data->implicit = $this->implicit;
		}
		if ($this->text !== null) {
			$data->text = $this->text;
		}
		if ($this->parsedOk !== null) {
			$data->parsedOk = $this->parsedOk;
		}
		if ($this->disabled !== null) {
			$data->disabled = $this->disabled;
		}
		if ($this->range !== null) {
			$data->range = $this->range->jsonSerialize();
		}
		if ($this->longhandProperties !== null) {
			$data->longhandProperties = [];
			foreach ($this->longhandProperties as $item) {
				$data->longhandProperties[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
