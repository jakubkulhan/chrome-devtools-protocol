<?php

namespace ChromeDevtoolsProtocol\Model\IndexedDB;

/**
 * Key path.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class KeyPath implements \JsonSerializable
{
	/**
	 * Key path type.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * String value.
	 *
	 * @var string|null
	 */
	public $string;

	/**
	 * Array value.
	 *
	 * @var string[]|null
	 */
	public $array;


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
		if (isset($data->string)) {
			$instance->string = (string)$data->string;
		}
		if (isset($data->array)) {
			$instance->array = [];
			foreach ($data->array as $item) {
				$instance->array[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->string !== null) {
			$data->string = $this->string;
		}
		if ($this->array !== null) {
			$data->array = [];
			foreach ($this->array as $item) {
				$data->array[] = $item;
			}
		}
		return $data;
	}
}
