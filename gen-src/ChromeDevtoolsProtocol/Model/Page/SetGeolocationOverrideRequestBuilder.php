<?php

namespace ChromeDevtoolsProtocol\Model\Page;

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


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetGeolocationOverrideRequest
	{
		$instance = new SetGeolocationOverrideRequest();
		$instance->latitude = $this->latitude;
		$instance->longitude = $this->longitude;
		$instance->accuracy = $this->accuracy;
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
}
