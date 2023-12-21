<?php

namespace ChromeDevtoolsProtocol\Model\Autofill;

/**
 * Named type Autofill.FilledField.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FilledField implements \JsonSerializable
{
	/**
	 * The type of the field, e.g text, password etc.
	 *
	 * @var string
	 */
	public $htmlType;

	/**
	 * the html id
	 *
	 * @var string
	 */
	public $id;

	/**
	 * the html name
	 *
	 * @var string
	 */
	public $name;

	/**
	 * the field value
	 *
	 * @var string
	 */
	public $value;

	/**
	 * The actual field type, e.g FAMILY_NAME
	 *
	 * @var string
	 */
	public $autofillType;

	/**
	 * The filling strategy
	 *
	 * @var string
	 */
	public $fillingStrategy;

	/**
	 * The form field's DOM node
	 *
	 * @var int
	 */
	public $fieldId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->htmlType)) {
			$instance->htmlType = (string)$data->htmlType;
		}
		if (isset($data->id)) {
			$instance->id = (string)$data->id;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->value)) {
			$instance->value = (string)$data->value;
		}
		if (isset($data->autofillType)) {
			$instance->autofillType = (string)$data->autofillType;
		}
		if (isset($data->fillingStrategy)) {
			$instance->fillingStrategy = (string)$data->fillingStrategy;
		}
		if (isset($data->fieldId)) {
			$instance->fieldId = (int)$data->fieldId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->htmlType !== null) {
			$data->htmlType = $this->htmlType;
		}
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		if ($this->autofillType !== null) {
			$data->autofillType = $this->autofillType;
		}
		if ($this->fillingStrategy !== null) {
			$data->fillingStrategy = $this->fillingStrategy;
		}
		if ($this->fieldId !== null) {
			$data->fieldId = $this->fieldId;
		}
		return $data;
	}
}
