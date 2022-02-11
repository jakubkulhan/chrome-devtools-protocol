<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Object property descriptor.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PropertyDescriptor implements \JsonSerializable
{
	/**
	 * Property name or symbol description.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * The value associated with the property.
	 *
	 * @var RemoteObject|null
	 */
	public $value;

	/**
	 * True if the value associated with the property may be changed (data descriptors only).
	 *
	 * @var bool|null
	 */
	public $writable;

	/**
	 * A function which serves as a getter for the property, or `undefined` if there is no getter (accessor descriptors only).
	 *
	 * @var RemoteObject|null
	 */
	public $get;

	/**
	 * A function which serves as a setter for the property, or `undefined` if there is no setter (accessor descriptors only).
	 *
	 * @var RemoteObject|null
	 */
	public $set;

	/**
	 * True if the type of this property descriptor may be changed and if the property may be deleted from the corresponding object.
	 *
	 * @var bool
	 */
	public $configurable;

	/**
	 * True if this property shows up during enumeration of the properties on the corresponding object.
	 *
	 * @var bool
	 */
	public $enumerable;

	/**
	 * True if the result was thrown during the evaluation.
	 *
	 * @var bool|null
	 */
	public $wasThrown;

	/**
	 * True if the property is owned for the object.
	 *
	 * @var bool|null
	 */
	public $isOwn;

	/**
	 * Property symbol object, if the property is of the `symbol` type.
	 *
	 * @var RemoteObject|null
	 */
	public $symbol;


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
			$instance->value = RemoteObject::fromJson($data->value);
		}
		if (isset($data->writable)) {
			$instance->writable = (bool)$data->writable;
		}
		if (isset($data->get)) {
			$instance->get = RemoteObject::fromJson($data->get);
		}
		if (isset($data->set)) {
			$instance->set = RemoteObject::fromJson($data->set);
		}
		if (isset($data->configurable)) {
			$instance->configurable = (bool)$data->configurable;
		}
		if (isset($data->enumerable)) {
			$instance->enumerable = (bool)$data->enumerable;
		}
		if (isset($data->wasThrown)) {
			$instance->wasThrown = (bool)$data->wasThrown;
		}
		if (isset($data->isOwn)) {
			$instance->isOwn = (bool)$data->isOwn;
		}
		if (isset($data->symbol)) {
			$instance->symbol = RemoteObject::fromJson($data->symbol);
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
			$data->value = $this->value->jsonSerialize();
		}
		if ($this->writable !== null) {
			$data->writable = $this->writable;
		}
		if ($this->get !== null) {
			$data->get = $this->get->jsonSerialize();
		}
		if ($this->set !== null) {
			$data->set = $this->set->jsonSerialize();
		}
		if ($this->configurable !== null) {
			$data->configurable = $this->configurable;
		}
		if ($this->enumerable !== null) {
			$data->enumerable = $this->enumerable;
		}
		if ($this->wasThrown !== null) {
			$data->wasThrown = $this->wasThrown;
		}
		if ($this->isOwn !== null) {
			$data->isOwn = $this->isOwn;
		}
		if ($this->symbol !== null) {
			$data->symbol = $this->symbol->jsonSerialize();
		}
		return $data;
	}
}
