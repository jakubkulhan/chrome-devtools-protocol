<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StartTrackingHeapObjectsRequestBuilder
{
	private $trackAllocations;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): StartTrackingHeapObjectsRequest
	{
		$instance = new StartTrackingHeapObjectsRequest();
		$instance->trackAllocations = $this->trackAllocations;
		return $instance;
	}


	/**
	 * @param bool|null $trackAllocations
	 *
	 * @return self
	 */
	public function setTrackAllocations($trackAllocations): self
	{
		$this->trackAllocations = $trackAllocations;
		return $this;
	}
}
