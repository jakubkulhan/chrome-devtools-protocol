<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Media query expression descriptor.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class MediaQueryExpression implements \JsonSerializable
{
	/**
	 * Media query expression value.
	 *
	 * @var int|float
	 */
	public $value;

	/**
	 * Media query expression units.
	 *
	 * @var string
	 */
	public $unit;

	/**
	 * Media query expression feature.
	 *
	 * @var string
	 */
	public $feature;

	/**
	 * The associated range of the value text in the enclosing stylesheet (if available).
	 *
	 * @var SourceRange|null
	 */
	public $valueRange;

	/**
	 * Computed length of media query expression (if applicable).
	 *
	 * @var int|float|null
	 */
	public $computedLength;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->value)) {
			$instance->value = $data->value;
		}
		if (isset($data->unit)) {
			$instance->unit = (string)$data->unit;
		}
		if (isset($data->feature)) {
			$instance->feature = (string)$data->feature;
		}
		if (isset($data->valueRange)) {
			$instance->valueRange = SourceRange::fromJson($data->valueRange);
		}
		if (isset($data->computedLength)) {
			$instance->computedLength = $data->computedLength;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		if ($this->unit !== null) {
			$data->unit = $this->unit;
		}
		if ($this->feature !== null) {
			$data->feature = $this->feature;
		}
		if ($this->valueRange !== null) {
			$data->valueRange = $this->valueRange->jsonSerialize();
		}
		if ($this->computedLength !== null) {
			$data->computedLength = $this->computedLength;
		}
		return $data;
	}
}
