<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Represents function call argument. Either remote object id `objectId`, primitive `value`, unserializable primitive value or neither of (for undefined) them should be specified.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CallArgument implements \JsonSerializable
{
	/**
	 * Primitive value or serializable javascript object.
	 *
	 * @var mixed|null
	 */
	public $value;

	/**
	 * Primitive value which can not be JSON-stringified.
	 *
	 * @var string
	 */
	public $unserializableValue;

	/**
	 * Remote object handle.
	 *
	 * @var string
	 */
	public $objectId;


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
		if (isset($data->unserializableValue)) {
			$instance->unserializableValue = (string)$data->unserializableValue;
		}
		if (isset($data->objectId)) {
			$instance->objectId = (string)$data->objectId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		if ($this->unserializableValue !== null) {
			$data->unserializableValue = $this->unserializableValue;
		}
		if ($this->objectId !== null) {
			$data->objectId = $this->objectId;
		}
		return $data;
	}
}
