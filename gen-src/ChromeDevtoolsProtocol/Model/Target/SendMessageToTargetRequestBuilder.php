<?php

namespace ChromeDevtoolsProtocol\Model\Target;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SendMessageToTargetRequestBuilder
{
	private $message;
	private $sessionId;
	private $targetId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SendMessageToTargetRequest
	{
		$instance = new SendMessageToTargetRequest();
		if ($this->message === null) {
			throw new BuilderException('Property [message] is required.');
		}
		$instance->message = $this->message;
		$instance->sessionId = $this->sessionId;
		$instance->targetId = $this->targetId;
		return $instance;
	}


	/**
	 * @param string $message
	 *
	 * @return self
	 */
	public function setMessage($message): self
	{
		$this->message = $message;
		return $this;
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
