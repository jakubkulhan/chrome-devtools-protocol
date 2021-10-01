<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TakeHeapSnapshotRequestBuilder
{
	private $reportProgress;
	private $treatGlobalObjectsAsRoots;
	private $captureNumericValue;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): TakeHeapSnapshotRequest
	{
		$instance = new TakeHeapSnapshotRequest();
		$instance->reportProgress = $this->reportProgress;
		$instance->treatGlobalObjectsAsRoots = $this->treatGlobalObjectsAsRoots;
		$instance->captureNumericValue = $this->captureNumericValue;
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
}
