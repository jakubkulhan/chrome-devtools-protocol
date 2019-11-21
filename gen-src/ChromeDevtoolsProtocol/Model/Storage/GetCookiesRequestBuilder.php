<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetCookiesRequestBuilder
{
	private $browserContextId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetCookiesRequest
	{
		$instance = new GetCookiesRequest();
		$instance->browserContextId = $this->browserContextId;
		return $instance;
	}


	/**
	 * @param string $browserContextId
	 *
	 * @return self
	 */
	public function setBrowserContextId($browserContextId): self
	{
		$this->browserContextId = $browserContextId;
		return $this;
	}
}
