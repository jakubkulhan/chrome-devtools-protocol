<?php
namespace ChromeDevtoolsProtocol\Model\Profiler;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetSamplingIntervalRequestBuilder
{
	private $interval;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetSamplingIntervalRequest
	{
		$instance = new SetSamplingIntervalRequest();
		if ($this->interval === null) {
			throw new BuilderException('Property [interval] is required.');
		}
		$instance->interval = $this->interval;
		return $instance;
	}


	/**
	 * @param int $interval
	 *
	 * @return self
	 */
	public function setInterval($interval): self
	{
		$this->interval = $interval;
		return $this;
	}
}
