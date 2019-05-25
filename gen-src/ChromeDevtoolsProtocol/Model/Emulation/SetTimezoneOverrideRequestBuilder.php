<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetTimezoneOverrideRequestBuilder
{
	private $timezoneId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetTimezoneOverrideRequest
	{
		$instance = new SetTimezoneOverrideRequest();
		if ($this->timezoneId === null) {
			throw new BuilderException('Property [timezoneId] is required.');
		}
		$instance->timezoneId = $this->timezoneId;
		return $instance;
	}


	/**
	 * @param string $timezoneId
	 *
	 * @return self
	 */
	public function setTimezoneId($timezoneId): self
	{
		$this->timezoneId = $timezoneId;
		return $this;
	}
}
