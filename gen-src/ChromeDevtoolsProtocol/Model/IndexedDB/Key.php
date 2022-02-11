<?php

namespace ChromeDevtoolsProtocol\Model\IndexedDB;

/**
 * Key.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Key implements \JsonSerializable
{
	/**
	 * Key type.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Number value.
	 *
	 * @var int|float|null
	 */
	public $number;

	/**
	 * String value.
	 *
	 * @var string|null
	 */
	public $string;

	/**
	 * Date value.
	 *
	 * @var int|float|null
	 */
	public $date;

	/**
	 * Array value.
	 *
	 * @var Key[]|null
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
		if (isset($data->number)) {
			$instance->number = $data->number;
		}
		if (isset($data->string)) {
			$instance->string = (string)$data->string;
		}
		if (isset($data->date)) {
			$instance->date = $data->date;
		}
		if (isset($data->array)) {
			$instance->array = [];
			foreach ($data->array as $item) {
				$instance->array[] = Key::fromJson($item);
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
		if ($this->number !== null) {
			$data->number = $this->number;
		}
		if ($this->string !== null) {
			$data->string = $this->string;
		}
		if ($this->date !== null) {
			$data->date = $this->date;
		}
		if ($this->array !== null) {
			$data->array = [];
			foreach ($this->array as $item) {
				$data->array[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
