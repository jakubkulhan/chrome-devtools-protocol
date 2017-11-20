<?php
namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetExtraHTTPHeadersRequestBuilder
{
	private $headers;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetExtraHTTPHeadersRequest
	{
		$instance = new SetExtraHTTPHeadersRequest();
		if ($this->headers === null) {
			throw new BuilderException('Property [headers] is required.');
		}
		$instance->headers = $this->headers;
		return $instance;
	}


	/**
	 * @param Headers $headers
	 *
	 * @return self
	 */
	public function setHeaders($headers): self
	{
		$this->headers = $headers;
		return $this;
	}
}
