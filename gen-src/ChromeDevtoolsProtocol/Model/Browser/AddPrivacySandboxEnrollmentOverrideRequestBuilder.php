<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddPrivacySandboxEnrollmentOverrideRequestBuilder
{
	private $url;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): AddPrivacySandboxEnrollmentOverrideRequest
	{
		$instance = new AddPrivacySandboxEnrollmentOverrideRequest();
		if ($this->url === null) {
			throw new BuilderException('Property [url] is required.');
		}
		$instance->url = $this->url;
		return $instance;
	}


	/**
	 * @param string $url
	 *
	 * @return self
	 */
	public function setUrl($url): self
	{
		$this->url = $url;
		return $this;
	}
}
