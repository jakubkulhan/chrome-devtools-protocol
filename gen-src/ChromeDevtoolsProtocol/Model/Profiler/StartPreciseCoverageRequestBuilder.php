<?php

namespace ChromeDevtoolsProtocol\Model\Profiler;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StartPreciseCoverageRequestBuilder
{
	private $callCount;
	private $detailed;
	private $allowTriggeredUpdates;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): StartPreciseCoverageRequest
	{
		$instance = new StartPreciseCoverageRequest();
		$instance->callCount = $this->callCount;
		$instance->detailed = $this->detailed;
		$instance->allowTriggeredUpdates = $this->allowTriggeredUpdates;
		return $instance;
	}


	/**
	 * @param bool|null $callCount
	 *
	 * @return self
	 */
	public function setCallCount($callCount): self
	{
		$this->callCount = $callCount;
		return $this;
	}


	/**
	 * @param bool|null $detailed
	 *
	 * @return self
	 */
	public function setDetailed($detailed): self
	{
		$this->detailed = $detailed;
		return $this;
	}


	/**
	 * @param bool|null $allowTriggeredUpdates
	 *
	 * @return self
	 */
	public function setAllowTriggeredUpdates($allowTriggeredUpdates): self
	{
		$this->allowTriggeredUpdates = $allowTriggeredUpdates;
		return $this;
	}
}
