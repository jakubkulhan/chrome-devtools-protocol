<?php

namespace ChromeDevtoolsProtocol\Model\DOM;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PerformSearchRequestBuilder
{
	private $query;

	private $includeUserAgentShadowDOM;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): PerformSearchRequest
	{
		$instance = new PerformSearchRequest();
		if ($this->query === null) {
			throw new BuilderException('Property [query] is required.');
		}
		$instance->query = $this->query;
		$instance->includeUserAgentShadowDOM = $this->includeUserAgentShadowDOM;
		return $instance;
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
	 * @param bool|null $includeUserAgentShadowDOM
	 *
	 * @return self
	 */
	public function setIncludeUserAgentShadowDOM($includeUserAgentShadowDOM): self
	{
		$this->includeUserAgentShadowDOM = $includeUserAgentShadowDOM;
		return $this;
	}
}
