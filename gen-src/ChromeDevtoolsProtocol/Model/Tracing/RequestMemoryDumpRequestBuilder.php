<?php

namespace ChromeDevtoolsProtocol\Model\Tracing;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestMemoryDumpRequestBuilder
{
	private $deterministic;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RequestMemoryDumpRequest
	{
		$instance = new RequestMemoryDumpRequest();
		$instance->deterministic = $this->deterministic;
		return $instance;
	}


	/**
	 * @param bool|null $deterministic
	 *
	 * @return self
	 */
	public function setDeterministic($deterministic): self
	{
		$this->deterministic = $deterministic;
		return $this;
	}
}
