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
	private $disableThirdPartyCookieMetadata;
	private $disableThirdPartyCookieHeuristics;


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
		if ($this->disableThirdPartyCookieMetadata === null) {
			throw new BuilderException('Property [disableThirdPartyCookieMetadata] is required.');
		}
		$instance->disableThirdPartyCookieMetadata = $this->disableThirdPartyCookieMetadata;
		if ($this->disableThirdPartyCookieHeuristics === null) {
			throw new BuilderException('Property [disableThirdPartyCookieHeuristics] is required.');
		}
		$instance->disableThirdPartyCookieHeuristics = $this->disableThirdPartyCookieHeuristics;
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


	/**
	 * @param bool $disableThirdPartyCookieMetadata
	 *
	 * @return self
	 */
	public function setDisableThirdPartyCookieMetadata($disableThirdPartyCookieMetadata): self
	{
		$this->disableThirdPartyCookieMetadata = $disableThirdPartyCookieMetadata;
		return $this;
	}


	/**
	 * @param bool $disableThirdPartyCookieHeuristics
	 *
	 * @return self
	 */
	public function setDisableThirdPartyCookieHeuristics($disableThirdPartyCookieHeuristics): self
	{
		$this->disableThirdPartyCookieHeuristics = $disableThirdPartyCookieHeuristics;
		return $this;
	}
}
