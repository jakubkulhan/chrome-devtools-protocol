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
	 * If true, a raw snapshot without artifical roots will be generated
	 *
	 * @var bool|null
	 */
	public $treatGlobalObjectsAsRoots;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->reportProgress)) {
			$instance->reportProgress = (bool)$data->reportProgress;
		}
		if (isset($data->treatGlobalObjectsAsRoots)) {
			$instance->treatGlobalObjectsAsRoots = (bool)$data->treatGlobalObjectsAsRoots;
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
