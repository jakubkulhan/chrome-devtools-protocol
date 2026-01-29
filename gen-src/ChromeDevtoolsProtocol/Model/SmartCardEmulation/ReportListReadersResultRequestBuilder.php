<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReportListReadersResultRequestBuilder
{
	private $requestId;
	private $readers;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ReportListReadersResultRequest
	{
		$instance = new ReportListReadersResultRequest();
		if ($this->requestId === null) {
			throw new BuilderException('Property [requestId] is required.');
		}
		$instance->requestId = $this->requestId;
		if ($this->readers === null) {
			throw new BuilderException('Property [readers] is required.');
		}
		$instance->readers = $this->readers;
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
	 * @param string[] $readers
	 *
	 * @return self
	 */
	public function setReaders($readers): self
	{
		$this->readers = $readers;
		return $this;
	}
}
