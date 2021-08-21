<?php

namespace ChromeDevtoolsProtocol\Model\Fetch;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ContinueResponseRequestBuilder
{
	private $requestId;
	private $responseCode;
	private $responsePhrase;
	private $responseHeaders;
	private $binaryResponseHeaders;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ContinueResponseRequest
	{
		$instance = new ContinueResponseRequest();
		if ($this->requestId === null) {
			throw new BuilderException('Property [requestId] is required.');
		}
		$instance->requestId = $this->requestId;
		$instance->responseCode = $this->responseCode;
		$instance->responsePhrase = $this->responsePhrase;
		$instance->responseHeaders = $this->responseHeaders;
		$instance->binaryResponseHeaders = $this->binaryResponseHeaders;
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
	 * @param int|null $responseCode
	 *
	 * @return self
	 */
	public function setResponseCode($responseCode): self
	{
		$this->responseCode = $responseCode;
		return $this;
	}


	/**
	 * @param string|null $responsePhrase
	 *
	 * @return self
	 */
	public function setResponsePhrase($responsePhrase): self
	{
		$this->responsePhrase = $responsePhrase;
		return $this;
	}


	/**
	 * @param HeaderEntry[]|null $responseHeaders
	 *
	 * @return self
	 */
	public function setResponseHeaders($responseHeaders): self
	{
		$this->responseHeaders = $responseHeaders;
		return $this;
	}


	/**
	 * @param string|null $binaryResponseHeaders
	 *
	 * @return self
	 */
	public function setBinaryResponseHeaders($binaryResponseHeaders): self
	{
		$this->binaryResponseHeaders = $binaryResponseHeaders;
		return $this;
	}
}
