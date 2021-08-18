<?php

namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableReportingApiRequestBuilder
{
	private $enable;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): EnableReportingApiRequest
	{
		$instance = new EnableReportingApiRequest();
		if ($this->enable === null) {
			throw new BuilderException('Property [enable] is required.');
		}
		$instance->enable = $this->enable;
		return $instance;
	}


	/**
	 * @param bool $enable
	 *
	 * @return self
	 */
	public function setEnable($enable): self
	{
		$this->enable = $enable;
		return $this;
	}
}
