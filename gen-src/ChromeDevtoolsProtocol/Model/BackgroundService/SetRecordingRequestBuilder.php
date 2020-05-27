<?php

namespace ChromeDevtoolsProtocol\Model\BackgroundService;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetRecordingRequestBuilder
{
	private $shouldRecord;
	private $service;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetRecordingRequest
	{
		$instance = new SetRecordingRequest();
		if ($this->shouldRecord === null) {
			throw new BuilderException('Property [shouldRecord] is required.');
		}
		$instance->shouldRecord = $this->shouldRecord;
		if ($this->service === null) {
			throw new BuilderException('Property [service] is required.');
		}
		$instance->service = $this->service;
		return $instance;
	}


	/**
	 * @param bool $shouldRecord
	 *
	 * @return self
	 */
	public function setShouldRecord($shouldRecord): self
	{
		$this->shouldRecord = $shouldRecord;
		return $this;
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
