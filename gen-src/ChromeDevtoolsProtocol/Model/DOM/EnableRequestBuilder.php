<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableRequestBuilder
{
	private $includeWhitespace;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): EnableRequest
	{
		$instance = new EnableRequest();
		$instance->includeWhitespace = $this->includeWhitespace;
		return $instance;
	}


	/**
	 * @param string|null $includeWhitespace
	 *
	 * @return self
	 */
	public function setIncludeWhitespace($includeWhitespace): self
	{
		$this->includeWhitespace = $includeWhitespace;
		return $this;
	}
}
