<?php

namespace ChromeDevtoolsProtocol\Model\Memory;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StartSamplingRequestBuilder
{
	private $samplingInterval;

	private $suppressRandomness;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): StartSamplingRequest
	{
		$instance = new StartSamplingRequest();
		$instance->samplingInterval = $this->samplingInterval;
		$instance->suppressRandomness = $this->suppressRandomness;
		return $instance;
	}


	/**
	 * @param int|null $samplingInterval
	 *
	 * @return self
	 */
	public function setSamplingInterval($samplingInterval): self
	{
		$this->samplingInterval = $samplingInterval;
		return $this;
	}


	/**
	 * @param bool|null $suppressRandomness
	 *
	 * @return self
	 */
	public function setSuppressRandomness($suppressRandomness): self
	{
		$this->suppressRandomness = $suppressRandomness;
		return $this;
	}
}
