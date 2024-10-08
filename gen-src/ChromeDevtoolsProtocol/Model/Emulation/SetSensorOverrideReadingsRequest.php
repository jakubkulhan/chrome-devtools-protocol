<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setSensorOverrideReadings command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetSensorOverrideReadingsRequest implements \JsonSerializable
{
	/** @var string */
	public $type;

	/** @var SensorReading */
	public $reading;


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
		if (isset($data->reading)) {
			$instance->reading = SensorReading::fromJson($data->reading);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->reading !== null) {
			$data->reading = $this->reading->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetSensorOverrideReadingsRequestBuilder
	 */
	public static function builder(): SetSensorOverrideReadingsRequestBuilder
	{
		return new SetSensorOverrideReadingsRequestBuilder();
	}
}
