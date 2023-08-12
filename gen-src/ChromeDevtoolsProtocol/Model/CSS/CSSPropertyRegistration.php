<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Representation of a custom property registration through CSS.registerProperty
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CSSPropertyRegistration implements \JsonSerializable
{
	/** @var string */
	public $propertyName;

	/** @var Value|null */
	public $initialValue;

	/** @var bool */
	public $inherits;

	/** @var string */
	public $syntax;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->propertyName)) {
			$instance->propertyName = (string)$data->propertyName;
		}
		if (isset($data->initialValue)) {
			$instance->initialValue = Value::fromJson($data->initialValue);
		}
		if (isset($data->inherits)) {
			$instance->inherits = (bool)$data->inherits;
		}
		if (isset($data->syntax)) {
			$instance->syntax = (string)$data->syntax;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->propertyName !== null) {
			$data->propertyName = $this->propertyName;
		}
		if ($this->initialValue !== null) {
			$data->initialValue = $this->initialValue->jsonSerialize();
		}
		if ($this->inherits !== null) {
			$data->inherits = $this->inherits;
		}
		if ($this->syntax !== null) {
			$data->syntax = $this->syntax;
		}
		return $data;
	}
}
