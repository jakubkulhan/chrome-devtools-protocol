<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Object containing abbreviated remote object value.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ObjectPreview implements \JsonSerializable
{
	/**
	 * Object type.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Object subtype hint. Specified for `object` type values only.
	 *
	 * @var string|null
	 */
	public $subtype;

	/**
	 * String representation of the object.
	 *
	 * @var string|null
	 */
	public $description;

	/**
	 * True iff some of the properties or entries of the original object did not fit.
	 *
	 * @var bool
	 */
	public $overflow;

	/**
	 * List of the properties.
	 *
	 * @var PropertyPreview[]
	 */
	public $properties;

	/**
	 * List of the entries. Specified for `map` and `set` subtype values only.
	 *
	 * @var EntryPreview[]|null
	 */
	public $entries;


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
		if (isset($data->description)) {
			$instance->description = (string)$data->description;
		}
		if (isset($data->overflow)) {
			$instance->overflow = (bool)$data->overflow;
		}
		if (isset($data->properties)) {
			$instance->properties = [];
			foreach ($data->properties as $item) {
				$instance->properties[] = PropertyPreview::fromJson($item);
			}
		}
		if (isset($data->entries)) {
			$instance->entries = [];
			foreach ($data->entries as $item) {
				$instance->entries[] = EntryPreview::fromJson($item);
			}
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
		if ($this->description !== null) {
			$data->description = $this->description;
		}
		if ($this->overflow !== null) {
			$data->overflow = $this->overflow;
		}
		if ($this->properties !== null) {
			$data->properties = [];
			foreach ($this->properties as $item) {
				$data->properties[] = $item->jsonSerialize();
			}
		}
		if ($this->entries !== null) {
			$data->entries = [];
			foreach ($this->entries as $item) {
				$data->entries[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
