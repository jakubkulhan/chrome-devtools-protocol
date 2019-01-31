<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoveBreakpointRequestBuilder
{
	private $breakpointId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RemoveBreakpointRequest
	{
		$instance = new RemoveBreakpointRequest();
		if ($this->breakpointId === null) {
			throw new BuilderException('Property [breakpointId] is required.');
		}
		$instance->breakpointId = $this->breakpointId;
		return $instance;
	}


	/**
	 * @param string $breakpointId
	 *
	 * @return self
	 */
	public function setBreakpointId($breakpointId): self
	{
		$this->breakpointId = $breakpointId;
		return $this;
	}
}
