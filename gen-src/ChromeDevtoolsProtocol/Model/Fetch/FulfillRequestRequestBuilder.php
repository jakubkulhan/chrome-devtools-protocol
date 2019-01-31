<?php

namespace ChromeDevtoolsProtocol\Model\Fetch;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FulfillRequestRequestBuilder
{
	private $requestId;

	private $responseCode;

	private $responseHeaders;

	private $body;

	private $responsePhrase;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): FulfillRequestRequest
	{
		$instance = new FulfillRequestRequest();
		if ($this->requestId === null) {
			throw new BuilderException('Property [requestId] is required.');
		}
		$instance->requestId = $this->requestId;
		if ($this->responseCode === null) {
			throw new BuilderException('Property [responseCode] is required.');
		}
		$instance->responseCode = $this->responseCode;
		if ($this->responseHeaders === null) {
			throw new BuilderException('Property [responseHeaders] is required.');
		}
		$instance->responseHeaders = $this->responseHeaders;
		$instance->body = $this->body;
		$instance->responsePhrase = $this->responsePhrase;
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
	 * @param int $responseCode
	 *
	 * @return self
	 */
	public function setResponseCode($responseCode): self
	{
		$this->responseCode = $responseCode;
		return $this;
	}


	/**
	 * @param HeaderEntry[] $responseHeaders
	 *
	 * @return self
	 */
	public function setResponseHeaders($responseHeaders): self
	{
		$this->responseHeaders = $responseHeaders;
		return $this;
	}


	/**
	 * @param string|null $body
	 *
	 * @return self
	 */
	public function setBody($body): self
	{
		$this->body = $body;
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
}
