<?php

namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

/**
 * Data that is only present on rare nodes.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RareStringData implements \JsonSerializable
{
	/** @var int[] */
	public $index;

	/** @var int[] */
	public $value;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->index)) {
			$instance->index = [];
			foreach ($data->index as $item) {
				$instance->index[] = (int)$item;
			}
		}
		if (isset($data->value)) {
			$instance->value = [];
		if (isset($data->value)) {
			$instance->value = [];
			foreach ($data->value as $item) {
				$instance->value[] = (int)$item;
			}
		}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->index !== null) {
			$data->index = [];
			foreach ($this->index as $item) {
				$data->index[] = $item;
			}
		}
		if ($this->value !== null) {
			$data->value = [];
		if ($this->value !== null) {
			$data->value = [];
			foreach ($this->value as $item) {
				$data->value[] = $item;
			}
		}
		}
		return $data;
	}
}
