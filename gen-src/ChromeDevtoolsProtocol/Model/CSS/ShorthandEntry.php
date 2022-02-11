<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Named type CSS.ShorthandEntry.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ShorthandEntry implements \JsonSerializable
{
	/**
	 * Shorthand name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Shorthand value.
	 *
	 * @var string
	 */
	public $value;

	/**
	 * Whether the property has "!important" annotation (implies `false` if absent).
	 *
	 * @var bool|null
	 */
	public $important;


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
			$instance->value = (string)$data->value;
		}
		if (isset($data->important)) {
			$instance->important = (bool)$data->important;
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
			$data->value = $this->value;
		}
		if ($this->important !== null) {
			$data->important = $this->important;
		}
		return $data;
	}
}
