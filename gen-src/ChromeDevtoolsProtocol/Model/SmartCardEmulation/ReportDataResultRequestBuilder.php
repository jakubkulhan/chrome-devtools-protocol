<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReportDataResultRequestBuilder
{
	private $requestId;
	private $data;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ReportDataResultRequest
	{
		$instance = new ReportDataResultRequest();
		if ($this->requestId === null) {
			throw new BuilderException('Property [requestId] is required.');
		}
		$instance->requestId = $this->requestId;
		if ($this->data === null) {
			throw new BuilderException('Property [data] is required.');
		}
		$instance->data = $this->data;
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
	 * @param string $data
	 *
	 * @return self
	 */
	public function setData($data): self
	{
		$this->data = $data;
		return $this;
	}
}
