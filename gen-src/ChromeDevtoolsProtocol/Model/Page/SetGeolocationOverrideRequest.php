<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.setGeolocationOverride command.
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
