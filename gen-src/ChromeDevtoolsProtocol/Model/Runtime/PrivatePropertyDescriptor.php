<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Object private field descriptor.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PrivatePropertyDescriptor implements \JsonSerializable
{
	/**
	 * Private property name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * The value associated with the private property.
	 *
	 * @var RemoteObject|null
	 */
	public $value;

	/**
	 * A function which serves as a getter for the private property, or `undefined` if there is no getter (accessor descriptors only).
	 *
	 * @var RemoteObject|null
	 */
	public $get;

	/**
	 * A function which serves as a setter for the private property, or `undefined` if there is no setter (accessor descriptors only).
	 *
	 * @var RemoteObject|null
	 */
	public $set;


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
		if (isset($data->get)) {
			$instance->get = RemoteObject::fromJson($data->get);
		}
		if (isset($data->set)) {
			$instance->set = RemoteObject::fromJson($data->set);
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
		if ($this->get !== null) {
			$data->get = $this->get->jsonSerialize();
		}
		if ($this->set !== null) {
			$data->set = $this->set->jsonSerialize();
		}
		return $data;
	}
}
