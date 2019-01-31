<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StartSamplingRequestBuilder
{
	private $samplingInterval;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): StartSamplingRequest
	{
		$instance = new StartSamplingRequest();
		$instance->samplingInterval = $this->samplingInterval;
		return $instance;
	}


	/**
	 * @param int|float|null $samplingInterval
	 *
	 * @return self
	 */
	public function setSamplingInterval($samplingInterval): self
	{
		$this->samplingInterval = $samplingInterval;
		return $this;
	}
}
