<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * CSS Shape Outside details.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ShapeOutsideInfo implements \JsonSerializable
{
	/**
	 * Shape bounds
	 *
	 * @var int[]|float[]
	 */
	public $bounds;

	/**
	 * Shape coordinate details
	 *
	 * @var mixed[]
	 */
	public $shape;

	/**
	 * Margin shape bounds
	 *
	 * @var mixed[]
	 */
	public $marginShape;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->bounds)) {
			$instance->bounds = [];
			foreach ($data->bounds as $item) {
				$instance->bounds[] = $item;
			}
		}
		if (isset($data->shape)) {
			$instance->shape = [];
			foreach ($data->shape as $item) {
				$instance->shape[] = $item;
			}
		}
		if (isset($data->marginShape)) {
			$instance->marginShape = [];
			foreach ($data->marginShape as $item) {
				$instance->marginShape[] = $item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->bounds !== null) {
			$data->bounds = [];
			foreach ($this->bounds as $item) {
				$data->bounds[] = $item;
			}
		}
		if ($this->shape !== null) {
			$data->shape = [];
			foreach ($this->shape as $item) {
				$data->shape[] = $item;
			}
		}
		if ($this->marginShape !== null) {
			$data->marginShape = [];
			foreach ($this->marginShape as $item) {
				$data->marginShape[] = $item;
			}
		}
		return $data;
	}
}
