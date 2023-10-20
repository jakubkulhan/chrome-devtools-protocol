<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setSensorOverrideEnabled command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetSensorOverrideEnabledRequest implements \JsonSerializable
{
	/** @var bool */
	public $enabled;

	/** @var string */
	public $type;

	/** @var SensorMetadata|null */
	public $metadata;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->enabled)) {
			$instance->enabled = (bool)$data->enabled;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->metadata)) {
			$instance->metadata = SensorMetadata::fromJson($data->metadata);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->enabled !== null) {
			$data->enabled = $this->enabled;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->metadata !== null) {
			$data->metadata = $this->metadata->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetSensorOverrideEnabledRequestBuilder
	 */
	public static function builder(): SetSensorOverrideEnabledRequestBuilder
	{
		return new SetSensorOverrideEnabledRequestBuilder();
	}
}
