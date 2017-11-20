<?php
namespace ChromeDevtoolsProtocol\Model\DOMDebugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoveEventListenerBreakpointRequestBuilder
{
	private $eventName;

	private $targetName;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): RemoveEventListenerBreakpointRequest
	{
		$instance = new RemoveEventListenerBreakpointRequest();
		if ($this->eventName === null) {
			throw new BuilderException('Property [eventName] is required.');
		}
		$instance->eventName = $this->eventName;
		$instance->targetName = $this->targetName;
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


	/**
	 * @param string|null $targetName
	 *
	 * @return self
	 */
	public function setTargetName($targetName): self
	{
		$this->targetName = $targetName;
		return $this;
	}
}
