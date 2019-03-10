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
	 * @var RemoteObject
	 */
	public $value;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->value)) {
			$instance->value = RemoteObject::fromJson($data->value);
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
		return $data;
	}
}
