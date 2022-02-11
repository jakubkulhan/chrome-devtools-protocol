<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setVirtualTimePolicy command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetVirtualTimePolicyRequest implements \JsonSerializable
{
	/** @var string */
	public $policy;

	/**
	 * If set, after this many virtual milliseconds have elapsed virtual time will be paused and a virtualTimeBudgetExpired event is sent.
	 *
	 * @var int|float|null
	 */
	public $budget;

	/**
	 * If set this specifies the maximum number of tasks that can be run before virtual is forced forwards to prevent deadlock.
	 *
	 * @var int|null
	 */
	public $maxVirtualTimeTaskStarvationCount;

	/**
	 * If set, base::Time::Now will be overridden to initially return this value.
	 *
	 * @var int|float
	 */
	public $initialVirtualTime;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->policy)) {
			$instance->policy = (string)$data->policy;
		}
		if (isset($data->budget)) {
			$instance->budget = $data->budget;
		}
		if (isset($data->maxVirtualTimeTaskStarvationCount)) {
			$instance->maxVirtualTimeTaskStarvationCount = (int)$data->maxVirtualTimeTaskStarvationCount;
		}
		if (isset($data->initialVirtualTime)) {
			$instance->initialVirtualTime = $data->initialVirtualTime;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->policy !== null) {
			$data->policy = $this->policy;
		}
		if ($this->budget !== null) {
			$data->budget = $this->budget;
		}
		if ($this->maxVirtualTimeTaskStarvationCount !== null) {
			$data->maxVirtualTimeTaskStarvationCount = $this->maxVirtualTimeTaskStarvationCount;
		}
		if ($this->initialVirtualTime !== null) {
			$data->initialVirtualTime = $this->initialVirtualTime;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetVirtualTimePolicyRequestBuilder
	 */
	public static function builder(): SetVirtualTimePolicyRequestBuilder
	{
		return new SetVirtualTimePolicyRequestBuilder();
	}
}
