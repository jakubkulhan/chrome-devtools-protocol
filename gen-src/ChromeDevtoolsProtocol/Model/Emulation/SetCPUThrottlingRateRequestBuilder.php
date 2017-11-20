<?php
namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetCPUThrottlingRateRequestBuilder
{
	private $rate;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetCPUThrottlingRateRequest
	{
		$instance = new SetCPUThrottlingRateRequest();
		if ($this->rate === null) {
			throw new BuilderException('Property [rate] is required.');
		}
		$instance->rate = $this->rate;
		return $instance;
	}


	/**
	 * @param int|float $rate
	 *
	 * @return self
	 */
	public function setRate($rate): self
	{
		$this->rate = $rate;
		return $this;
	}
}
