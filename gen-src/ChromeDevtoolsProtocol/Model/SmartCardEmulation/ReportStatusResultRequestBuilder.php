<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReportStatusResultRequestBuilder
{
	private $requestId;
	private $readerName;
	private $state;
	private $atr;
	private $protocol;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ReportStatusResultRequest
	{
		$instance = new ReportStatusResultRequest();
		if ($this->requestId === null) {
			throw new BuilderException('Property [requestId] is required.');
		}
		$instance->requestId = $this->requestId;
		if ($this->readerName === null) {
			throw new BuilderException('Property [readerName] is required.');
		}
		$instance->readerName = $this->readerName;
		if ($this->state === null) {
			throw new BuilderException('Property [state] is required.');
		}
		$instance->state = $this->state;
		if ($this->atr === null) {
			throw new BuilderException('Property [atr] is required.');
		}
		$instance->atr = $this->atr;
		$instance->protocol = $this->protocol;
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
	 * @param string $readerName
	 *
	 * @return self
	 */
	public function setReaderName($readerName): self
	{
		$this->readerName = $readerName;
		return $this;
	}


	/**
	 * @param string $state
	 *
	 * @return self
	 */
	public function setState($state): self
	{
		$this->state = $state;
		return $this;
	}


	/**
	 * @param string $atr
	 *
	 * @return self
	 */
	public function setAtr($atr): self
	{
		$this->atr = $atr;
		return $this;
	}


	/**
	 * @param string $protocol
	 *
	 * @return self
	 */
	public function setProtocol($protocol): self
	{
		$this->protocol = $protocol;
		return $this;
	}
}
