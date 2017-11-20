<?php
namespace ChromeDevtoolsProtocol\Model\Memory;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SimulatePressureNotificationRequestBuilder
{
	private $level;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SimulatePressureNotificationRequest
	{
		$instance = new SimulatePressureNotificationRequest();
		if ($this->level === null) {
			throw new BuilderException('Property [level] is required.');
		}
		$instance->level = $this->level;
		return $instance;
	}


	/**
	 * @param string $level
	 *
	 * @return self
	 */
	public function setLevel($level): self
	{
		$this->level = $level;
		return $this;
	}
}
