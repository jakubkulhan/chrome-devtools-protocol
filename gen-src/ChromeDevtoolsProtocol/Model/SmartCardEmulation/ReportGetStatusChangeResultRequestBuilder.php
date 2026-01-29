<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReportGetStatusChangeResultRequestBuilder
{
	private $requestId;
	private $readerStates;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ReportGetStatusChangeResultRequest
	{
		$instance = new ReportGetStatusChangeResultRequest();
		if ($this->requestId === null) {
			throw new BuilderException('Property [requestId] is required.');
		}
		$instance->requestId = $this->requestId;
		if ($this->readerStates === null) {
			throw new BuilderException('Property [readerStates] is required.');
		}
		$instance->readerStates = $this->readerStates;
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
	 * @param ReaderStateOut[] $readerStates
	 *
	 * @return self
	 */
	public function setReaderStates($readerStates): self
	{
		$this->readerStates = $readerStates;
		return $this;
	}
}
