<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DetachFromTargetRequestBuilder
{
	private $sessionId;

	private $targetId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DetachFromTargetRequest
	{
		$instance = new DetachFromTargetRequest();
		$instance->sessionId = $this->sessionId;
		$instance->targetId = $this->targetId;
		return $instance;
	}


	/**
	 * @param string $sessionId
	 *
	 * @return self
	 */
	public function setSessionId($sessionId): self
	{
		$this->sessionId = $sessionId;
		return $this;
	}


	/**
	 * @param string $targetId
	 *
	 * @return self
	 */
	public function setTargetId($targetId): self
	{
		$this->targetId = $targetId;
		return $this;
	}
}
