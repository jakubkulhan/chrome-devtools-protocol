<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Named type Emulation.SensorReadingQuaternion.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SensorReadingQuaternion implements \JsonSerializable
{
	/** @var int|float */
	public $x;

	/** @var int|float */
	public $y;

	/** @var int|float */
	public $z;

	/** @var int|float */
	public $w;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->x)) {
			$instance->x = $data->x;
		}
		if (isset($data->y)) {
			$instance->y = $data->y;
		}
		if (isset($data->z)) {
			$instance->z = $data->z;
		}
		if (isset($data->w)) {
			$instance->w = $data->w;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->x !== null) {
			$data->x = $this->x;
		}
		if ($this->y !== null) {
			$data->y = $this->y;
		}
		if ($this->z !== null) {
			$data->z = $this->z;
		}
		if ($this->w !== null) {
			$data->w = $this->w;
		}
		return $data;
	}
}
