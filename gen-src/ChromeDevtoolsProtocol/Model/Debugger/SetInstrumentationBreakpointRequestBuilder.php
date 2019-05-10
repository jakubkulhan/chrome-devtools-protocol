<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetInstrumentationBreakpointRequestBuilder
{
	private $instrumentation;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetInstrumentationBreakpointRequest
	{
		$instance = new SetInstrumentationBreakpointRequest();
		if ($this->instrumentation === null) {
			throw new BuilderException('Property [instrumentation] is required.');
		}
		$instance->instrumentation = $this->instrumentation;
		return $instance;
	}


	/**
	 * @param string $instrumentation
	 *
	 * @return self
	 */
	public function setInstrumentation($instrumentation): self
	{
		$this->instrumentation = $instrumentation;
		return $this;
	}
}
