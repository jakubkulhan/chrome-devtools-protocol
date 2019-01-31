<?php

namespace ChromeDevtoolsProtocol\Model\Log;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StartViolationsReportRequestBuilder
{
	private $config;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): StartViolationsReportRequest
	{
		$instance = new StartViolationsReportRequest();
		if ($this->config === null) {
			throw new BuilderException('Property [config] is required.');
		}
		$instance->config = $this->config;
		return $instance;
	}


	/**
	 * @param ViolationSetting[] $config
	 *
	 * @return self
	 */
	public function setConfig($config): self
	{
		$this->config = $config;
		return $this;
	}
}
