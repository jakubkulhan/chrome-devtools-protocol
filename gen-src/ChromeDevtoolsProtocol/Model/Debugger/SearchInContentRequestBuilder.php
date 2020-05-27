<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SearchInContentRequestBuilder
{
	private $scriptId;
	private $query;
	private $caseSensitive;
	private $isRegex;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SearchInContentRequest
	{
		$instance = new SearchInContentRequest();
		if ($this->scriptId === null) {
			throw new BuilderException('Property [scriptId] is required.');
		}
		$instance->scriptId = $this->scriptId;
		if ($this->query === null) {
			throw new BuilderException('Property [query] is required.');
		}
		$instance->query = $this->query;
		$instance->caseSensitive = $this->caseSensitive;
		$instance->isRegex = $this->isRegex;
		return $instance;
	}


	/**
	 * @param string $scriptId
	 *
	 * @return self
	 */
	public function setScriptId($scriptId): self
	{
		$this->scriptId = $scriptId;
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
