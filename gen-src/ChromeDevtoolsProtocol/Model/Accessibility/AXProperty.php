<?php

namespace ChromeDevtoolsProtocol\Model\Accessibility;

/**
 * Named type Accessibility.AXProperty.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AXProperty implements \JsonSerializable
{
	/**
	 * The name of this property.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * The value of this property.
	 *
	 * @var AXValue
	 */
	public $value;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->value)) {
			$instance->value = AXValue::fromJson($data->value);
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
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
