<?php

namespace ChromeDevtoolsProtocol\Model\Fetch;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FailRequestRequestBuilder
{
	private $requestId;
	private $errorReason;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): FailRequestRequest
	{
		$instance = new FailRequestRequest();
		if ($this->requestId === null) {
			throw new BuilderException('Property [requestId] is required.');
		}
		$instance->requestId = $this->requestId;
		if ($this->errorReason === null) {
			throw new BuilderException('Property [errorReason] is required.');
		}
		$instance->errorReason = $this->errorReason;
		return $instance;
	}


	/**
	 * @param string $requestId
	 *
	 * @return self
	 */
	public function setRequestId($requestId): self
	{
		$this->requestId = $requestId;
		return $this;
	}


	/**
	 * @param string $errorReason
	 *
	 * @return self
	 */
	public function setErrorReason($errorReason): self
	{
		$this->errorReason = $errorReason;
		return $this;
	}
}
