<?php

namespace ChromeDevtoolsProtocol\Model\Profiler;

/**
 * Request for Profiler.startPreciseCoverage command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StartPreciseCoverageRequest implements \JsonSerializable
{
	/**
	 * Collect accurate call counts beyond simple 'covered' or 'not covered'.
	 *
	 * @var bool|null
	 */
	public $callCount;

	/**
	 * Collect block-based coverage.
	 *
	 * @var bool|null
	 */
	public $detailed;

	/**
	 * Allow the backend to send updates on its own initiative
	 *
	 * @var bool|null
	 */
	public $allowTriggeredUpdates;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->callCount)) {
			$instance->callCount = (bool)$data->callCount;
		}
		if (isset($data->detailed)) {
			$instance->detailed = (bool)$data->detailed;
		}
		if (isset($data->allowTriggeredUpdates)) {
			$instance->allowTriggeredUpdates = (bool)$data->allowTriggeredUpdates;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->callCount !== null) {
			$data->callCount = $this->callCount;
		}
		if ($this->detailed !== null) {
			$data->detailed = $this->detailed;
		}
		if ($this->allowTriggeredUpdates !== null) {
			$data->allowTriggeredUpdates = $this->allowTriggeredUpdates;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return StartPreciseCoverageRequestBuilder
	 */
	public static function builder(): StartPreciseCoverageRequestBuilder
	{
		return new StartPreciseCoverageRequestBuilder();
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
