<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setGeolocationOverride command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetGeolocationOverrideRequest implements \JsonSerializable
{
	/**
	 * Mock latitude
	 *
	 * @var int|float|null
	 */
	public $latitude;

	/**
	 * Mock longitude
	 *
	 * @var int|float|null
	 */
	public $longitude;

	/**
	 * Mock accuracy
	 *
	 * @var int|float|null
	 */
	public $accuracy;

	/**
	 * Mock altitude
	 *
	 * @var int|float|null
	 */
	public $altitude;

	/**
	 * Mock altitudeAccuracy
	 *
	 * @var int|float|null
	 */
	public $altitudeAccuracy;

	/**
	 * Mock heading
	 *
	 * @var int|float|null
	 */
	public $heading;

	/**
	 * Mock speed
	 *
	 * @var int|float|null
	 */
	public $speed;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->latitude)) {
			$instance->latitude = $data->latitude;
		}
		if (isset($data->longitude)) {
			$instance->longitude = $data->longitude;
		}
		if (isset($data->accuracy)) {
			$instance->accuracy = $data->accuracy;
		}
		if (isset($data->altitude)) {
			$instance->altitude = $data->altitude;
		}
		if (isset($data->altitudeAccuracy)) {
			$instance->altitudeAccuracy = $data->altitudeAccuracy;
		}
		if (isset($data->heading)) {
			$instance->heading = $data->heading;
		}
		if (isset($data->speed)) {
			$instance->speed = $data->speed;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->latitude !== null) {
			$data->latitude = $this->latitude;
		}
		if ($this->longitude !== null) {
			$data->longitude = $this->longitude;
		}
		if ($this->accuracy !== null) {
			$data->accuracy = $this->accuracy;
		}
		if ($this->altitude !== null) {
			$data->altitude = $this->altitude;
		}
		if ($this->altitudeAccuracy !== null) {
			$data->altitudeAccuracy = $this->altitudeAccuracy;
		}
		if ($this->heading !== null) {
			$data->heading = $this->heading;
		}
		if ($this->speed !== null) {
			$data->speed = $this->speed;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetGeolocationOverrideRequestBuilder
	 */
	public static function builder(): SetGeolocationOverrideRequestBuilder
	{
		return new SetGeolocationOverrideRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
