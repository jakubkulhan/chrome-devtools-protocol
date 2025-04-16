<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetGeolocationOverrideRequestBuilder
{
	private $latitude;
	private $longitude;
	private $accuracy;
	private $altitude;
	private $altitudeAccuracy;
	private $heading;
	private $speed;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetGeolocationOverrideRequest
	{
		$instance = new SetGeolocationOverrideRequest();
		$instance->latitude = $this->latitude;
		$instance->longitude = $this->longitude;
		$instance->accuracy = $this->accuracy;
		$instance->altitude = $this->altitude;
		$instance->altitudeAccuracy = $this->altitudeAccuracy;
		$instance->heading = $this->heading;
		$instance->speed = $this->speed;
		return $instance;
	}


	/**
	 * @param int|float|null $latitude
	 *
	 * @return self
	 */
	public function setLatitude($latitude): self
	{
		$this->latitude = $latitude;
		return $this;
	}


	/**
	 * @param int|float|null $longitude
	 *
	 * @return self
	 */
	public function setLongitude($longitude): self
	{
		$this->longitude = $longitude;
		return $this;
	}


	/**
	 * @param int|float|null $accuracy
	 *
	 * @return self
	 */
	public function setAccuracy($accuracy): self
	{
		$this->accuracy = $accuracy;
		return $this;
	}


	/**
	 * @param int|float|null $altitude
	 *
	 * @return self
	 */
	public function setAltitude($altitude): self
	{
		$this->altitude = $altitude;
		return $this;
	}


	/**
	 * @param int|float|null $altitudeAccuracy
	 *
	 * @return self
	 */
	public function setAltitudeAccuracy($altitudeAccuracy): self
	{
		$this->altitudeAccuracy = $altitudeAccuracy;
		return $this;
	}


	/**
	 * @param int|float|null $heading
	 *
	 * @return self
	 */
	public function setHeading($heading): self
	{
		$this->heading = $heading;
		return $this;
	}


	/**
	 * @param int|float|null $speed
	 *
	 * @return self
	 */
	public function setSpeed($speed): self
	{
		$this->speed = $speed;
		return $this;
	}
}
