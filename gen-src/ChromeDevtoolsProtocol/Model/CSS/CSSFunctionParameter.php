<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * CSS function argument representation.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CSSFunctionParameter implements \JsonSerializable
{
	/**
	 * The parameter name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * The parameter type.
	 *
	 * @var string
	 */
	public $type;


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
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		return $data;
	}
}
