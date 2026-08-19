<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetCPUPerformanceOverrideRequestBuilder
{
	private $performanceTier;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetCPUPerformanceOverrideRequest
	{
		$instance = new SetCPUPerformanceOverrideRequest();
		$instance->performanceTier = $this->performanceTier;
		return $instance;
	}


	/**
	 * @param string|null $performanceTier
	 *
	 * @return self
	 */
	public function setPerformanceTier($performanceTier): self
	{
		$this->performanceTier = $performanceTier;
		return $this;
	}
}
