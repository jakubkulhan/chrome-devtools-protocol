<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReportErrorRequestBuilder
{
	private $requestId;
	private $resultCode;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ReportErrorRequest
	{
		$instance = new ReportErrorRequest();
		if ($this->requestId === null) {
			throw new BuilderException('Property [requestId] is required.');
		}
		$instance->requestId = $this->requestId;
		if ($this->resultCode === null) {
			throw new BuilderException('Property [resultCode] is required.');
		}
		$instance->resultCode = $this->resultCode;
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
	 * @param string $resultCode
	 *
	 * @return self
	 */
	public function setResultCode($resultCode): self
	{
		$this->resultCode = $resultCode;
		return $this;
	}
}
