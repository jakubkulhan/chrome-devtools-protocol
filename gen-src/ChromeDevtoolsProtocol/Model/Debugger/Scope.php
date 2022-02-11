<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Model\Runtime\RemoteObject;

/**
 * Scope description.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Scope implements \JsonSerializable
{
	/**
	 * Scope type.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Object representing the scope. For `global` and `with` scopes it represents the actual object; for the rest of the scopes, it is artificial transient object enumerating scope variables as its properties.
	 *
	 * @var RemoteObject
	 */
	public $object;

	/** @var string|null */
	public $name;

	/**
	 * Location in the source code where scope starts
	 *
	 * @var Location|null
	 */
	public $startLocation;

	/**
	 * Location in the source code where scope ends
	 *
	 * @var Location|null
	 */
	public $endLocation;


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
		if (isset($data->object)) {
			$instance->object = RemoteObject::fromJson($data->object);
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->startLocation)) {
			$instance->startLocation = Location::fromJson($data->startLocation);
		}
		if (isset($data->endLocation)) {
			$instance->endLocation = Location::fromJson($data->endLocation);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->object !== null) {
			$data->object = $this->object->jsonSerialize();
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->startLocation !== null) {
			$data->startLocation = $this->startLocation->jsonSerialize();
		}
		if ($this->endLocation !== null) {
			$data->endLocation = $this->endLocation->jsonSerialize();
		}
		return $data;
	}
}
