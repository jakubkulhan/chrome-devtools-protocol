<?php
namespace ChromeDevtoolsProtocol\Model\Fetch;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ContinueRequestRequestBuilder
{
	private $requestId;

	private $url;

	private $method;

	private $postData;

	private $headers;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ContinueRequestRequest
	{
		$instance = new ContinueRequestRequest();
		if ($this->requestId === null) {
			throw new BuilderException('Property [requestId] is required.');
		}
		$instance->requestId = $this->requestId;
		$instance->url = $this->url;
		$instance->method = $this->method;
		$instance->postData = $this->postData;
		$instance->headers = $this->headers;
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
	 * @param HeaderEntry[]|null $headers
	 *
	 * @return self
	 */
	public function setHeaders($headers): self
	{
		$this->headers = $headers;
		return $this;
	}
}
