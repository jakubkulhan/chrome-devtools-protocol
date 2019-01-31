<?php

namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SearchInResponseBodyRequestBuilder
{
	private $requestId;

	private $query;

	private $caseSensitive;

	private $isRegex;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SearchInResponseBodyRequest
	{
		$instance = new SearchInResponseBodyRequest();
		if ($this->requestId === null) {
			throw new BuilderException('Property [requestId] is required.');
		}
		$instance->requestId = $this->requestId;
		if ($this->query === null) {
			throw new BuilderException('Property [query] is required.');
		}
		$instance->query = $this->query;
		$instance->caseSensitive = $this->caseSensitive;
		$instance->isRegex = $this->isRegex;
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
	 * @param string $query
	 *
	 * @return self
	 */
	public function setQuery($query): self
	{
		$this->query = $query;
		return $this;
	}


	/**
	 * @param bool|null $caseSensitive
	 *
	 * @return self
	 */
	public function setCaseSensitive($caseSensitive): self
	{
		$this->caseSensitive = $caseSensitive;
		return $this;
	}


	/**
	 * @param bool|null $isRegex
	 *
	 * @return self
	 */
	public function setIsRegex($isRegex): self
	{
		$this->isRegex = $isRegex;
		return $this;
	}
}
