<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * Request for HeapProfiler.takeHeapSnapshot command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TakeHeapSnapshotRequest implements \JsonSerializable
{
	/**
	 * If true 'reportHeapSnapshotProgress' events will be generated while snapshot is being taken.
	 *
	 * @var bool|null
	 */
	public $reportProgress;

	/**
	 * If true, a raw snapshot without artificial roots will be generated
	 *
	 * @var bool|null
	 */
	public $treatGlobalObjectsAsRoots;

	/**
	 * If true, numerical values are included in the snapshot
	 *
	 * @var bool|null
	 */
	public $captureNumericValue;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->reportProgress)) {
			$instance->reportProgress = (bool)$data->reportProgress;
		}
		if (isset($data->treatGlobalObjectsAsRoots)) {
			$instance->treatGlobalObjectsAsRoots = (bool)$data->treatGlobalObjectsAsRoots;
		}
		if (isset($data->captureNumericValue)) {
			$instance->captureNumericValue = (bool)$data->captureNumericValue;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->reportProgress !== null) {
			$data->reportProgress = $this->reportProgress;
		}
		if ($this->treatGlobalObjectsAsRoots !== null) {
			$data->treatGlobalObjectsAsRoots = $this->treatGlobalObjectsAsRoots;
		}
		if ($this->captureNumericValue !== null) {
			$data->captureNumericValue = $this->captureNumericValue;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return TakeHeapSnapshotRequestBuilder
	 */
	public static function builder(): TakeHeapSnapshotRequestBuilder
	{
		return new TakeHeapSnapshotRequestBuilder();
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
