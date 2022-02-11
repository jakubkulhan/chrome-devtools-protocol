<?php

namespace ChromeDevtoolsProtocol\Model\Memory;

/**
 * Request for Memory.startSampling command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StartSamplingRequest implements \JsonSerializable
{
	/**
	 * Average number of bytes between samples.
	 *
	 * @var int|null
	 */
	public $samplingInterval;

	/**
	 * Do not randomize intervals between samples.
	 *
	 * @var bool|null
	 */
	public $suppressRandomness;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->samplingInterval)) {
			$instance->samplingInterval = (int)$data->samplingInterval;
		}
		if (isset($data->suppressRandomness)) {
			$instance->suppressRandomness = (bool)$data->suppressRandomness;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->samplingInterval !== null) {
			$data->samplingInterval = $this->samplingInterval;
		}
		if ($this->suppressRandomness !== null) {
			$data->suppressRandomness = $this->suppressRandomness;
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
