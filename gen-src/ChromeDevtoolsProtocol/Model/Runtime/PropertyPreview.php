<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Named type Runtime.PropertyPreview.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PropertyPreview implements \JsonSerializable
{
	/**
	 * Property name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Object type. Accessor means that the property itself is an accessor property.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * User-friendly property value string.
	 *
	 * @var string|null
	 */
	public $value;

	/**
	 * Nested value preview.
	 *
	 * @var ObjectPreview|null
	 */
	public $valuePreview;

	/**
	 * Object subtype hint. Specified for `object` type values only.
	 *
	 * @var string|null
	 */
	public $subtype;


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
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->value)) {
			$instance->value = (string)$data->value;
		}
		if (isset($data->valuePreview)) {
			$instance->valuePreview = ObjectPreview::fromJson($data->valuePreview);
		}
		if (isset($data->subtype)) {
			$instance->subtype = (string)$data->subtype;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		if ($this->valuePreview !== null) {
			$data->valuePreview = $this->valuePreview->jsonSerialize();
		}
		if ($this->subtype !== null) {
			$data->subtype = $this->subtype;
		}
		return $data;
	}
}
