<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StopTrackingHeapObjectsRequestBuilder
{
	private $reportProgress;
	private $treatGlobalObjectsAsRoots;
	private $captureNumericValue;
	private $exposeInternals;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): StopTrackingHeapObjectsRequest
	{
		$instance = new StopTrackingHeapObjectsRequest();
		$instance->reportProgress = $this->reportProgress;
		$instance->treatGlobalObjectsAsRoots = $this->treatGlobalObjectsAsRoots;
		$instance->captureNumericValue = $this->captureNumericValue;
		$instance->exposeInternals = $this->exposeInternals;
		return $instance;
	}


	/**
	 * @param bool|null $reportProgress
	 *
	 * @return self
	 */
	public function setReportProgress($reportProgress): self
	{
		$this->reportProgress = $reportProgress;
		return $this;
	}


	/**
	 * @param bool|null $treatGlobalObjectsAsRoots
	 *
	 * @return self
	 */
	public function setTreatGlobalObjectsAsRoots($treatGlobalObjectsAsRoots): self
	{
		$this->treatGlobalObjectsAsRoots = $treatGlobalObjectsAsRoots;
		return $this;
	}


	/**
	 * @param bool|null $captureNumericValue
	 *
	 * @return self
	 */
	public function setCaptureNumericValue($captureNumericValue): self
	{
		$this->captureNumericValue = $captureNumericValue;
		return $this;
	}


	/**
	 * @param bool|null $exposeInternals
	 *
	 * @return self
	 */
	public function setExposeInternals($exposeInternals): self
	{
		$this->exposeInternals = $exposeInternals;
		return $this;
	}
}
