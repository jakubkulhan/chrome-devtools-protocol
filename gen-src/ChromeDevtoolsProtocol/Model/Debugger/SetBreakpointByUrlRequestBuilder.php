<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBreakpointByUrlRequestBuilder
{
	private $lineNumber;
	private $url;
	private $urlRegex;
	private $scriptHash;
	private $columnNumber;
	private $condition;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetBreakpointByUrlRequest
	{
		$instance = new SetBreakpointByUrlRequest();
		if ($this->lineNumber === null) {
			throw new BuilderException('Property [lineNumber] is required.');
		}
		$instance->lineNumber = $this->lineNumber;
		$instance->url = $this->url;
		$instance->urlRegex = $this->urlRegex;
		$instance->scriptHash = $this->scriptHash;
		$instance->columnNumber = $this->columnNumber;
		$instance->condition = $this->condition;
		return $instance;
	}


	/**
	 * @param int $lineNumber
	 *
	 * @return self
	 */
	public function setLineNumber($lineNumber): self
	{
		$this->lineNumber = $lineNumber;
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
	 * @param string|null $urlRegex
	 *
	 * @return self
	 */
	public function setUrlRegex($urlRegex): self
	{
		$this->urlRegex = $urlRegex;
		return $this;
	}


	/**
	 * @param string|null $scriptHash
	 *
	 * @return self
	 */
	public function setScriptHash($scriptHash): self
	{
		$this->scriptHash = $scriptHash;
		return $this;
	}


	/**
	 * @param int|null $columnNumber
	 *
	 * @return self
	 */
	public function setColumnNumber($columnNumber): self
	{
		$this->columnNumber = $columnNumber;
		return $this;
	}


	/**
	 * @param string|null $condition
	 *
	 * @return self
	 */
	public function setCondition($condition): self
	{
		$this->condition = $condition;
		return $this;
	}
}
