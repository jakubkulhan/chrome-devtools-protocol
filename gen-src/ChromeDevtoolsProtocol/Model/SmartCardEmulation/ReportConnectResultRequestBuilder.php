<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReportConnectResultRequestBuilder
{
	private $requestId;
	private $handle;
	private $activeProtocol;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ReportConnectResultRequest
	{
		$instance = new ReportConnectResultRequest();
		if ($this->requestId === null) {
			throw new BuilderException('Property [requestId] is required.');
		}
		$instance->requestId = $this->requestId;
		if ($this->handle === null) {
			throw new BuilderException('Property [handle] is required.');
		}
		$instance->handle = $this->handle;
		$instance->activeProtocol = $this->activeProtocol;
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
	 * @param int $handle
	 *
	 * @return self
	 */
	public function setHandle($handle): self
	{
		$this->handle = $handle;
		return $this;
	}


	/**
	 * @param string $activeProtocol
	 *
	 * @return self
	 */
	public function setActiveProtocol($activeProtocol): self
	{
		$this->activeProtocol = $activeProtocol;
		return $this;
	}
}
