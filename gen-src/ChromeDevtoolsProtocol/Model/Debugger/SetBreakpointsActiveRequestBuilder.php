<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBreakpointsActiveRequestBuilder
{
	private $active;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetBreakpointsActiveRequest
	{
		$instance = new SetBreakpointsActiveRequest();
		if ($this->active === null) {
			throw new BuilderException('Property [active] is required.');
		}
		$instance->active = $this->active;
		return $instance;
	}


	/**
	 * @param bool $active
	 *
	 * @return self
	 */
	public function setActive($active): self
	{
		$this->active = $active;
		return $this;
	}
}
