<?php

namespace ChromeDevtoolsProtocol\Model\DeviceOrientation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDeviceOrientationOverrideRequestBuilder
{
	private $alpha;
	private $beta;
	private $gamma;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetDeviceOrientationOverrideRequest
	{
		$instance = new SetDeviceOrientationOverrideRequest();
		if ($this->alpha === null) {
			throw new BuilderException('Property [alpha] is required.');
		}
		$instance->alpha = $this->alpha;
		if ($this->beta === null) {
			throw new BuilderException('Property [beta] is required.');
		}
		$instance->beta = $this->beta;
		if ($this->gamma === null) {
			throw new BuilderException('Property [gamma] is required.');
		}
		$instance->gamma = $this->gamma;
		return $instance;
	}


	/**
	 * @param int|float $alpha
	 *
	 * @return self
	 */
	public function setAlpha($alpha): self
	{
		$this->alpha = $alpha;
		return $this;
	}


	/**
	 * @param int|float $beta
	 *
	 * @return self
	 */
	public function setBeta($beta): self
	{
		$this->beta = $beta;
		return $this;
	}


	/**
	 * @param int|float $gamma
	 *
	 * @return self
	 */
	public function setGamma($gamma): self
	{
		$this->gamma = $gamma;
		return $this;
	}
}
