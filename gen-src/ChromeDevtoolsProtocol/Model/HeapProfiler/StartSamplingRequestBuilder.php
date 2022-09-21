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
	private $includeObjectsCollectedByMajorGC;
	private $includeObjectsCollectedByMinorGC;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): StartSamplingRequest
	{
		$instance = new StartSamplingRequest();
		$instance->samplingInterval = $this->samplingInterval;
		$instance->includeObjectsCollectedByMajorGC = $this->includeObjectsCollectedByMajorGC;
		$instance->includeObjectsCollectedByMinorGC = $this->includeObjectsCollectedByMinorGC;
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


	/**
	 * @param bool|null $includeObjectsCollectedByMajorGC
	 *
	 * @return self
	 */
	public function setIncludeObjectsCollectedByMajorGC($includeObjectsCollectedByMajorGC): self
	{
		$this->includeObjectsCollectedByMajorGC = $includeObjectsCollectedByMajorGC;
		return $this;
	}


	/**
	 * @param bool|null $includeObjectsCollectedByMinorGC
	 *
	 * @return self
	 */
	public function setIncludeObjectsCollectedByMinorGC($includeObjectsCollectedByMinorGC): self
	{
		$this->includeObjectsCollectedByMinorGC = $includeObjectsCollectedByMinorGC;
		return $this;
	}
}
