<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Mirror object referencing original JavaScript object.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoteObject implements \JsonSerializable
{
	/**
	 * Object type.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Object subtype hint. Specified for `object` type values only. NOTE: If you change anything here, make sure to also update `subtype` in `ObjectPreview` and `PropertyPreview` below.
	 *
	 * @var string|null
	 */
	public $subtype;

	/**
	 * Object class (constructor) name. Specified for `object` type values only.
	 *
	 * @var string|null
	 */
	public $className;

	/**
	 * Remote object value in case of primitive values or JSON values (if it was requested).
	 *
	 * @var mixed|null
	 */
	public $value;

	/**
	 * Primitive value which can not be JSON-stringified does not have `value`, but gets this property.
	 *
	 * @var string
	 */
	public $unserializableValue;

	/**
	 * String representation of the object.
	 *
	 * @var string|null
	 */
	public $description;

	/**
	 * WebDriver BiDi representation of the value.
	 *
	 * @var WebDriverValue|null
	 */
	public $webDriverValue;

	/**
	 * Unique object identifier (for non-primitive values).
	 *
	 * @var string
	 */
	public $objectId;

	/**
	 * Preview containing abbreviated property values. Specified for `object` type values only.
	 *
	 * @var ObjectPreview|null
	 */
	public $preview;

	/** @var CustomPreview|null */
	public $customPreview;


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
		if (isset($data->subtype)) {
			$instance->subtype = (string)$data->subtype;
		}
		if (isset($data->className)) {
			$instance->className = (string)$data->className;
		}
		if (isset($data->value)) {
			$instance->value = $data->value;
		}
		if (isset($data->unserializableValue)) {
			$instance->unserializableValue = (string)$data->unserializableValue;
		}
		if (isset($data->description)) {
			$instance->description = (string)$data->description;
		}
		if (isset($data->webDriverValue)) {
			$instance->webDriverValue = WebDriverValue::fromJson($data->webDriverValue);
		}
		if (isset($data->objectId)) {
			$instance->objectId = (string)$data->objectId;
		}
		if (isset($data->preview)) {
			$instance->preview = ObjectPreview::fromJson($data->preview);
		}
		if (isset($data->customPreview)) {
			$instance->customPreview = CustomPreview::fromJson($data->customPreview);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->subtype !== null) {
			$data->subtype = $this->subtype;
		}
		if ($this->className !== null) {
			$data->className = $this->className;
		}
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		if ($this->unserializableValue !== null) {
			$data->unserializableValue = $this->unserializableValue;
		}
		if ($this->description !== null) {
			$data->description = $this->description;
		}
		if ($this->webDriverValue !== null) {
			$data->webDriverValue = $this->webDriverValue->jsonSerialize();
		}
		if ($this->objectId !== null) {
			$data->objectId = $this->objectId;
		}
		if ($this->preview !== null) {
			$data->preview = $this->preview->jsonSerialize();
		}
		if ($this->customPreview !== null) {
			$data->customPreview = $this->customPreview->jsonSerialize();
		}
		return $data;
	}
}
