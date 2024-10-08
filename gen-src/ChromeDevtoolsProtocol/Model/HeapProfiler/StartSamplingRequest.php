<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * Request for HeapProfiler.startSampling command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StartSamplingRequest implements \JsonSerializable
{
	/**
	 * Average sample interval in bytes. Poisson distribution is used for the intervals. The default value is 32768 bytes.
	 *
	 * @var int|float|null
	 */
	public $samplingInterval;

	/**
	 * By default, the sampling heap profiler reports only objects which are still alive when the profile is returned via getSamplingProfile or stopSampling, which is useful for determining what functions contribute the most to steady-state memory usage. This flag instructs the sampling heap profiler to also include information about objects discarded by major GC, which will show which functions cause large temporary memory usage or long GC pauses.
	 *
	 * @var bool|null
	 */
	public $includeObjectsCollectedByMajorGC;

	/**
	 * By default, the sampling heap profiler reports only objects which are still alive when the profile is returned via getSamplingProfile or stopSampling, which is useful for determining what functions contribute the most to steady-state memory usage. This flag instructs the sampling heap profiler to also include information about objects discarded by minor GC, which is useful when tuning a latency-sensitive application for minimal GC activity.
	 *
	 * @var bool|null
	 */
	public $includeObjectsCollectedByMinorGC;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->samplingInterval)) {
			$instance->samplingInterval = $data->samplingInterval;
		}
		if (isset($data->includeObjectsCollectedByMajorGC)) {
			$instance->includeObjectsCollectedByMajorGC = (bool)$data->includeObjectsCollectedByMajorGC;
		}
		if (isset($data->includeObjectsCollectedByMinorGC)) {
			$instance->includeObjectsCollectedByMinorGC = (bool)$data->includeObjectsCollectedByMinorGC;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->samplingInterval !== null) {
			$data->samplingInterval = $this->samplingInterval;
		}
		if ($this->includeObjectsCollectedByMajorGC !== null) {
			$data->includeObjectsCollectedByMajorGC = $this->includeObjectsCollectedByMajorGC;
		}
		if ($this->includeObjectsCollectedByMinorGC !== null) {
			$data->includeObjectsCollectedByMinorGC = $this->includeObjectsCollectedByMinorGC;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return StartSamplingRequestBuilder
	 */
	public static function builder(): StartSamplingRequestBuilder
	{
		return new StartSamplingRequestBuilder();
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
