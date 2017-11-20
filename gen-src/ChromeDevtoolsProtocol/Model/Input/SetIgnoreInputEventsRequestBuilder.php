<?php
namespace ChromeDevtoolsProtocol\Model\Input;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetIgnoreInputEventsRequestBuilder
{
	private $ignore;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetIgnoreInputEventsRequest
	{
		$instance = new SetIgnoreInputEventsRequest();
		if ($this->ignore === null) {
			throw new BuilderException('Property [ignore] is required.');
		}
		$instance->ignore = $this->ignore;
		return $instance;
	}


	/**
	 * @param bool $ignore
	 *
	 * @return self
	 */
	public function setIgnore($ignore): self
	{
		$this->ignore = $ignore;
		return $this;
	}
}
