<?php

namespace ChromeDevtoolsProtocol\Model\Profiler;

/**
 * Request for Profiler.setSamplingInterval command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetSamplingIntervalRequest implements \JsonSerializable
{
	/**
	 * New sampling interval in microseconds.
	 *
	 * @var int
	 */
	public $interval;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->interval)) {
			$instance->interval = (int)$data->interval;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->interval !== null) {
			$data->interval = $this->interval;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetSamplingIntervalRequestBuilder
	 */
	public static function builder(): SetSamplingIntervalRequestBuilder
	{
		return new SetSamplingIntervalRequestBuilder();
	}
}
