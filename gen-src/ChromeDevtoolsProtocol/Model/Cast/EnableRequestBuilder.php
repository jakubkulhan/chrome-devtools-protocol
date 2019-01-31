<?php

namespace ChromeDevtoolsProtocol\Model\Cast;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableRequestBuilder
{
	private $presentationUrl;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): EnableRequest
	{
		$instance = new EnableRequest();
		$instance->presentationUrl = $this->presentationUrl;
		return $instance;
	}


	/**
	 * @param string|null $presentationUrl
	 *
	 * @return self
	 */
	public function setPresentationUrl($presentationUrl): self
	{
		$this->presentationUrl = $presentationUrl;
		return $this;
	}
}
