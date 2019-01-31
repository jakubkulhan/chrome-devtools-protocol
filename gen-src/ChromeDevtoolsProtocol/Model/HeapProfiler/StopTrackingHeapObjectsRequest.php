<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * Request for HeapProfiler.stopTrackingHeapObjects command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StopTrackingHeapObjectsRequest implements \JsonSerializable
{
	/**
	 * If true 'reportHeapSnapshotProgress' events will be generated while snapshot is being taken when the tracking is stopped.
	 *
	 * @var bool|null
	 */
	public $reportProgress;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->reportProgress)) {
			$instance->reportProgress = (bool)$data->reportProgress;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->reportProgress !== null) {
			$data->reportProgress = $this->reportProgress;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return StopTrackingHeapObjectsRequestBuilder
	 */
	public static function builder(): StopTrackingHeapObjectsRequestBuilder
	{
		return new StopTrackingHeapObjectsRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
