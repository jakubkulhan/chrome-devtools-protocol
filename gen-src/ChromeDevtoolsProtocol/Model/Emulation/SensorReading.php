<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Named type Emulation.SensorReading.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SensorReading implements \JsonSerializable
{
	/** @var SensorReadingSingle|null */
	public $single;

	/** @var SensorReadingXYZ|null */
	public $xyz;

	/** @var SensorReadingQuaternion|null */
	public $quaternion;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->single)) {
			$instance->single = SensorReadingSingle::fromJson($data->single);
		}
		if (isset($data->xyz)) {
			$instance->xyz = SensorReadingXYZ::fromJson($data->xyz);
		}
		if (isset($data->quaternion)) {
			$instance->quaternion = SensorReadingQuaternion::fromJson($data->quaternion);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->single !== null) {
			$data->single = $this->single->jsonSerialize();
		}
		if ($this->xyz !== null) {
			$data->xyz = $this->xyz->jsonSerialize();
		}
		if ($this->quaternion !== null) {
			$data->quaternion = $this->quaternion->jsonSerialize();
		}
		return $data;
	}
}
