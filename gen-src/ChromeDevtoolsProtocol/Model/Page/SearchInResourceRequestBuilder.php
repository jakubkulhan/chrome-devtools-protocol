<?php

namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SearchInResourceRequestBuilder
{
	private $frameId;
	private $url;
	private $query;
	private $caseSensitive;
	private $isRegex;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SearchInResourceRequest
	{
		$instance = new SearchInResourceRequest();
		if ($this->frameId === null) {
			throw new BuilderException('Property [frameId] is required.');
		}
		$instance->frameId = $this->frameId;
		if ($this->url === null) {
			throw new BuilderException('Property [url] is required.');
		}
		$instance->url = $this->url;
		if ($this->query === null) {
			throw new BuilderException('Property [query] is required.');
		}
		$instance->query = $this->query;
		$instance->caseSensitive = $this->caseSensitive;
		$instance->isRegex = $this->isRegex;
		return $instance;
	}


	/**
	 * @param string $frameId
	 *
	 * @return self
	 */
	public function setFrameId($frameId): self
	{
		$this->frameId = $frameId;
		return $this;
	}


	/**
	 * @param string $url
	 *
	 * @return self
	 */
	public function setUrl($url): self
	{
		$this->url = $url;
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
