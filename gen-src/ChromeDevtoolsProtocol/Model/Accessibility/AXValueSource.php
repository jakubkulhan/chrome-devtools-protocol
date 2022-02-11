<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * A single source for a computed AX property.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AXValueSource implements \JsonSerializable
{
	/**
	 * What type of source this is.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * The value of this property source.
	 *
	 * @var AXValue|null
	 */
	public $value;

	/**
	 * The name of the relevant attribute, if any.
	 *
	 * @var string|null
	 */
	public $attribute;

	/**
	 * The value of the relevant attribute, if any.
	 *
	 * @var AXValue|null
	 */
	public $attributeValue;

	/**
	 * Whether this source is superseded by a higher priority source.
	 *
	 * @var bool|null
	 */
	public $superseded;

	/**
	 * The native markup source for this value, e.g. a <label> element.
	 *
	 * @var string
	 */
	public $nativeSource;

	/**
	 * The value, such as a node or node list, of the native source.
	 *
	 * @var AXValue|null
	 */
	public $nativeSourceValue;

	/**
	 * Whether the value for this property is invalid.
	 *
	 * @var bool|null
	 */
	public $invalid;

	/**
	 * Reason for the value being invalid, if it is.
	 *
	 * @var string|null
	 */
	public $invalidReason;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->value)) {
			$instance->value = AXValue::fromJson($data->value);
		}
		if (isset($data->attribute)) {
			$instance->attribute = (string)$data->attribute;
		}
		if (isset($data->attributeValue)) {
			$instance->attributeValue = AXValue::fromJson($data->attributeValue);
		}
		if (isset($data->superseded)) {
			$instance->superseded = (bool)$data->superseded;
		}
		if (isset($data->nativeSource)) {
			$instance->nativeSource = (string)$data->nativeSource;
		}
		if (isset($data->nativeSourceValue)) {
			$instance->nativeSourceValue = AXValue::fromJson($data->nativeSourceValue);
		}
		if (isset($data->invalid)) {
			$instance->invalid = (bool)$data->invalid;
		}
		if (isset($data->invalidReason)) {
			$instance->invalidReason = (string)$data->invalidReason;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->value !== null) {
			$data->value = $this->value->jsonSerialize();
		}
		if ($this->attribute !== null) {
			$data->attribute = $this->attribute;
		}
		if ($this->attributeValue !== null) {
			$data->attributeValue = $this->attributeValue->jsonSerialize();
		}
		if ($this->superseded !== null) {
			$data->superseded = $this->superseded;
		}
		if ($this->nativeSource !== null) {
			$data->nativeSource = $this->nativeSource;
		}
		if ($this->nativeSourceValue !== null) {
			$data->nativeSourceValue = $this->nativeSourceValue->jsonSerialize();
		}
		if ($this->invalid !== null) {
			$data->invalid = $this->invalid;
		}
		if ($this->invalidReason !== null) {
			$data->invalidReason = $this->invalidReason;
		}
		return $data;
	}
}
