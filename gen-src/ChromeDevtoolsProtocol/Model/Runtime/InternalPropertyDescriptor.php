<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Object internal property descriptor. This property isn't normally visible in JavaScript code.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InternalPropertyDescriptor implements \JsonSerializable
{
	/**
	 * Conventional property name.
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
