<?php

namespace ChromeDevtoolsProtocol\Model\EventBreakpoints;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoveInstrumentationBreakpointRequestBuilder
{
	private $eventName;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RemoveInstrumentationBreakpointRequest
	{
		$instance = new RemoveInstrumentationBreakpointRequest();
		if ($this->eventName === null) {
			throw new BuilderException('Property [eventName] is required.');
		}
		$instance->eventName = $this->eventName;
		return $instance;
	}


	/**
	 * @param string $eventName
	 *
	 * @return self
	 */
	public function setEventName($eventName): self
	{
		$this->eventName = $eventName;
		return $this;
	}
}
