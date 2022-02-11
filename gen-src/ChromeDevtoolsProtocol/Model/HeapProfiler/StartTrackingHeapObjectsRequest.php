<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * Request for HeapProfiler.startTrackingHeapObjects command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StartTrackingHeapObjectsRequest implements \JsonSerializable
{
	/** @var bool|null */
	public $trackAllocations;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->trackAllocations)) {
			$instance->trackAllocations = (bool)$data->trackAllocations;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->trackAllocations !== null) {
			$data->trackAllocations = $this->trackAllocations;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return StartTrackingHeapObjectsRequestBuilder
	 */
	public static function builder(): StartTrackingHeapObjectsRequestBuilder
	{
		return new StartTrackingHeapObjectsRequestBuilder();
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
