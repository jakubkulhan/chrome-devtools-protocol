<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Response to CSS.setPropertyRulePropertyName command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPropertyRulePropertyNameResponse implements \JsonSerializable
{
	/**
	 * The resulting key text after modification.
	 *
	 * @var Value
	 */
	public $propertyName;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->propertyName)) {
			$instance->propertyName = Value::fromJson($data->propertyName);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->propertyName !== null) {
			$data->propertyName = $this->propertyName->jsonSerialize();
		}
		return $data;
	}
}
