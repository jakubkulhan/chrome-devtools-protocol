<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setCPUThrottlingRate command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetCPUThrottlingRateRequest implements \JsonSerializable
{
	/**
	 * Throttling rate as a slowdown factor (1 is no throttle, 2 is 2x slowdown, etc).
	 *
	 * @var int|float
	 */
	public $rate;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->rate)) {
			$instance->rate = $data->rate;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->rate !== null) {
			$data->rate = $this->rate;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetCPUThrottlingRateRequestBuilder
	 */
	public static function builder(): SetCPUThrottlingRateRequestBuilder
	{
		return new SetCPUThrottlingRateRequestBuilder();
	}
}
