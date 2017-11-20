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


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): TakeHeapSnapshotRequest
	{
		$instance = new TakeHeapSnapshotRequest();
		$instance->reportProgress = $this->reportProgress;
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
}
