<?php
namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScreencastFrameAckRequestBuilder
{
	private $sessionId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ScreencastFrameAckRequest
	{
		$instance = new ScreencastFrameAckRequest();
		if ($this->sessionId === null) {
			throw new BuilderException('Property [sessionId] is required.');
		}
		$instance->sessionId = $this->sessionId;
		return $instance;
	}


	/**
	 * @param int $sessionId
	 *
	 * @return self
	 */
	public function setSessionId($sessionId): self
	{
		$this->sessionId = $sessionId;
		return $this;
	}
}
