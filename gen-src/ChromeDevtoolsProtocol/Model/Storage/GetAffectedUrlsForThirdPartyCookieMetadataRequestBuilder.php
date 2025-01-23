<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetAffectedUrlsForThirdPartyCookieMetadataRequestBuilder
{
	private $firstPartyUrl;
	private $thirdPartyUrls;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetAffectedUrlsForThirdPartyCookieMetadataRequest
	{
		$instance = new GetAffectedUrlsForThirdPartyCookieMetadataRequest();
		if ($this->firstPartyUrl === null) {
			throw new BuilderException('Property [firstPartyUrl] is required.');
		}
		$instance->firstPartyUrl = $this->firstPartyUrl;
		if ($this->thirdPartyUrls === null) {
			throw new BuilderException('Property [thirdPartyUrls] is required.');
		}
		$instance->thirdPartyUrls = $this->thirdPartyUrls;
		return $instance;
	}


	/**
	 * @param string $firstPartyUrl
	 *
	 * @return self
	 */
	public function setFirstPartyUrl($firstPartyUrl): self
	{
		$this->firstPartyUrl = $firstPartyUrl;
		return $this;
	}


	/**
	 * @param string[] $thirdPartyUrls
	 *
	 * @return self
	 */
	public function setThirdPartyUrls($thirdPartyUrls): self
	{
		$this->thirdPartyUrls = $thirdPartyUrls;
		return $this;
	}
}
