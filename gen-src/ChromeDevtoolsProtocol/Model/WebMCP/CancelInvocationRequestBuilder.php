<?php

namespace ChromeDevtoolsProtocol\Model\WebMCP;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CancelInvocationRequestBuilder
{
	private $invocationId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): CancelInvocationRequest
	{
		$instance = new CancelInvocationRequest();
		if ($this->invocationId === null) {
			throw new BuilderException('Property [invocationId] is required.');
		}
		$instance->invocationId = $this->invocationId;
		return $instance;
	}


	/**
	 * @param string $invocationId
	 *
	 * @return self
	 */
	public function setInvocationId($invocationId): self
	{
		$this->invocationId = $invocationId;
		return $this;
	}
}
