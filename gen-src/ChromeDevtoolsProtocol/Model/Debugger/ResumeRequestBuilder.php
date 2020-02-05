<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ResumeRequestBuilder
{
	private $terminateOnResume;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ResumeRequest
	{
		$instance = new ResumeRequest();
		$instance->terminateOnResume = $this->terminateOnResume;
		return $instance;
	}


	/**
	 * @param bool|null $terminateOnResume
	 *
	 * @return self
	 */
	public function setTerminateOnResume($terminateOnResume): self
	{
		$this->terminateOnResume = $terminateOnResume;
		return $this;
	}
}
