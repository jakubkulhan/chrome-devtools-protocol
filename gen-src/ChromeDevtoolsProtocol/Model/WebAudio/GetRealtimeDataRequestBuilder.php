<?php

namespace ChromeDevtoolsProtocol\Model\WebAudio;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetRealtimeDataRequestBuilder
{
	private $contextId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetRealtimeDataRequest
	{
		$instance = new GetRealtimeDataRequest();
		if ($this->contextId === null) {
			throw new BuilderException('Property [contextId] is required.');
		}
		$instance->contextId = $this->contextId;
		return $instance;
	}


	/**
	 * @param string $contextId
	 *
	 * @return self
	 */
	public function setContextId($contextId): self
	{
		$this->contextId = $contextId;
		return $this;
	}
}
