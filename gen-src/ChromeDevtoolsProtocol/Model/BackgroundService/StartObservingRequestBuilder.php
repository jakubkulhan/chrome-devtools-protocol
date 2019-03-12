<?php

namespace ChromeDevtoolsProtocol\Model\BackgroundService;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StartObservingRequestBuilder
{
	private $service;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): StartObservingRequest
	{
		$instance = new StartObservingRequest();
		if ($this->service === null) {
			throw new BuilderException('Property [service] is required.');
		}
		$instance->service = $this->service;
		return $instance;
	}


	/**
	 * @param string $service
	 *
	 * @return self
	 */
	public function setService($service): self
	{
		$this->service = $service;
		return $this;
	}
}
