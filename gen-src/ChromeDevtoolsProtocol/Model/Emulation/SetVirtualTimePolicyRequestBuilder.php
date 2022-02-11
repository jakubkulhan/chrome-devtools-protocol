<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetVirtualTimePolicyRequestBuilder
{
	private $policy;
	private $budget;
	private $maxVirtualTimeTaskStarvationCount;
	private $initialVirtualTime;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetVirtualTimePolicyRequest
	{
		$instance = new SetVirtualTimePolicyRequest();
		if ($this->policy === null) {
			throw new BuilderException('Property [policy] is required.');
		}
		$instance->policy = $this->policy;
		$instance->budget = $this->budget;
		$instance->maxVirtualTimeTaskStarvationCount = $this->maxVirtualTimeTaskStarvationCount;
		$instance->initialVirtualTime = $this->initialVirtualTime;
		return $instance;
	}


	/**
	 * @param string $policy
	 *
	 * @return self
	 */
	public function setPolicy($policy): self
	{
		$this->policy = $policy;
		return $this;
	}


	/**
	 * @param int|float|null $budget
	 *
	 * @return self
	 */
	public function setBudget($budget): self
	{
		$this->budget = $budget;
		return $this;
	}


	/**
	 * @param int|null $maxVirtualTimeTaskStarvationCount
	 *
	 * @return self
	 */
	public function setMaxVirtualTimeTaskStarvationCount($maxVirtualTimeTaskStarvationCount): self
	{
		$this->maxVirtualTimeTaskStarvationCount = $maxVirtualTimeTaskStarvationCount;
		return $this;
	}


	/**
	 * @param int|float $initialVirtualTime
	 *
	 * @return self
	 */
	public function setInitialVirtualTime($initialVirtualTime): self
	{
		$this->initialVirtualTime = $initialVirtualTime;
		return $this;
	}
}
