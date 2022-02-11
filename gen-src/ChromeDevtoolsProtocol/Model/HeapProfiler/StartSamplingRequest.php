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
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->samplingInterval)) {
			$instance->samplingInterval = $data->samplingInterval;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->samplingInterval !== null) {
			$data->samplingInterval = $this->samplingInterval;
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
