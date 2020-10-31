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
	private $levelOfDetail;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RequestMemoryDumpRequest
	{
		$instance = new RequestMemoryDumpRequest();
		$instance->deterministic = $this->deterministic;
		$instance->levelOfDetail = $this->levelOfDetail;
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


	/**
	 * @param string $levelOfDetail
	 *
	 * @return self
	 */
	public function setLevelOfDetail($levelOfDetail): self
	{
		$this->levelOfDetail = $levelOfDetail;
		return $this;
	}
}
