<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetCookiesRequestBuilder
{
	private $urls;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetCookiesRequest
	{
		$instance = new GetCookiesRequest();
		$instance->urls = $this->urls;
		return $instance;
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
