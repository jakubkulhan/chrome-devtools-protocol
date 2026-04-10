<?php

namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetCookieControlsRequestBuilder
{
	private $enableThirdPartyCookieRestriction;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetCookieControlsRequest
	{
		$instance = new SetCookieControlsRequest();
		if ($this->enableThirdPartyCookieRestriction === null) {
			throw new BuilderException('Property [enableThirdPartyCookieRestriction] is required.');
		}
		$instance->enableThirdPartyCookieRestriction = $this->enableThirdPartyCookieRestriction;
		return $instance;
	}


	/**
	 * @param bool $enableThirdPartyCookieRestriction
	 *
	 * @return self
	 */
	public function setEnableThirdPartyCookieRestriction($enableThirdPartyCookieRestriction): self
	{
		$this->enableThirdPartyCookieRestriction = $enableThirdPartyCookieRestriction;
		return $this;
	}
}
