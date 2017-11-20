<?php
namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBlockedURLsRequestBuilder
{
	private $urls;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetBlockedURLsRequest
	{
		$instance = new SetBlockedURLsRequest();
		if ($this->urls === null) {
			throw new BuilderException('Property [urls] is required.');
		}
		$instance->urls = $this->urls;
		return $instance;
	}


	/**
	 * @param string[] $urls
	 *
	 * @return self
	 */
	public function setUrls($urls): self
	{
		$this->urls = $urls;
		return $this;
	}
}
