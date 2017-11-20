<?php
namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetUserAgentOverrideRequestBuilder
{
	private $userAgent;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetUserAgentOverrideRequest
	{
		$instance = new SetUserAgentOverrideRequest();
		if ($this->userAgent === null) {
			throw new BuilderException('Property [userAgent] is required.');
		}
		$instance->userAgent = $this->userAgent;
		return $instance;
	}


	/**
	 * @param string $userAgent
	 *
	 * @return self
	 */
	public function setUserAgent($userAgent): self
	{
		$this->userAgent = $userAgent;
		return $this;
	}
}
