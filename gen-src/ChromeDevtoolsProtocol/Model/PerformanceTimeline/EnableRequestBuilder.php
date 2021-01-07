<?php

namespace ChromeDevtoolsProtocol\Model\PerformanceTimeline;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableRequestBuilder
{
	private $eventTypes;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): EnableRequest
	{
		$instance = new EnableRequest();
		if ($this->eventTypes === null) {
			throw new BuilderException('Property [eventTypes] is required.');
		}
		$instance->eventTypes = $this->eventTypes;
		return $instance;
	}


	/**
	 * @param string[] $eventTypes
	 *
	 * @return self
	 */
	public function setEventTypes($eventTypes): self
	{
		$this->eventTypes = $eventTypes;
		return $this;
	}
}
