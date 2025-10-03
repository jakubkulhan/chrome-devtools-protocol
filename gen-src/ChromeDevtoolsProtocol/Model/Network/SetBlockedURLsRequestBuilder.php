<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBlockedURLsRequestBuilder
{
	private $urlPatterns;
	private $urls;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetBlockedURLsRequest
	{
		$instance = new SetBlockedURLsRequest();
		$instance->urlPatterns = $this->urlPatterns;
		$instance->urls = $this->urls;
		return $instance;
	}


	/**
	 * @param string[]|null $urlPatterns
	 *
	 * @return self
	 */
	public function setUrlPatterns($urlPatterns): self
	{
		$this->urlPatterns = $urlPatterns;
		return $this;
	}


	/**
	 * @param string[]|null $urls
	 *
	 * @return self
	 */
	public function setUrls($urls): self
	{
		$this->urls = $urls;
		return $this;
	}
}
