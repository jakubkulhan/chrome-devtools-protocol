<?php
namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ContinueInterceptedRequestRequestBuilder
{
	private $interceptionId;

	private $errorReason;

	private $rawResponse;

	private $url;

	private $method;

	private $postData;

	private $headers;

	private $authChallengeResponse;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ContinueInterceptedRequestRequest
	{
		$instance = new ContinueInterceptedRequestRequest();
		if ($this->interceptionId === null) {
			throw new BuilderException('Property [interceptionId] is required.');
		}
		$instance->interceptionId = $this->interceptionId;
		$instance->errorReason = $this->errorReason;
		$instance->rawResponse = $this->rawResponse;
		$instance->url = $this->url;
		$instance->method = $this->method;
		$instance->postData = $this->postData;
		$instance->headers = $this->headers;
		$instance->authChallengeResponse = $this->authChallengeResponse;
		return $instance;
	}


	/**
	 * @param string $interceptionId
	 *
	 * @return self
	 */
	public function setInterceptionId($interceptionId): self
	{
		$this->interceptionId = $interceptionId;
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


	/**
	 * @param string|null $rawResponse
	 *
	 * @return self
	 */
	public function setRawResponse($rawResponse): self
	{
		$this->rawResponse = $rawResponse;
		return $this;
	}


	/**
	 * @param string|null $url
	 *
	 * @return self
	 */
	public function setUrl($url): self
	{
		$this->url = $url;
		return $this;
	}


	/**
	 * @param string|null $method
	 *
	 * @return self
	 */
	public function setMethod($method): self
	{
		$this->method = $method;
		return $this;
	}


	/**
	 * @param string|null $postData
	 *
	 * @return self
	 */
	public function setPostData($postData): self
	{
		$this->postData = $postData;
		return $this;
	}


	/**
	 * @param Headers|null $headers
	 *
	 * @return self
	 */
	public function setHeaders($headers): self
	{
		$this->headers = $headers;
		return $this;
	}


	/**
	 * @param AuthChallengeResponse|null $authChallengeResponse
	 *
	 * @return self
	 */
	public function setAuthChallengeResponse($authChallengeResponse): self
	{
		$this->authChallengeResponse = $authChallengeResponse;
		return $this;
	}
}
