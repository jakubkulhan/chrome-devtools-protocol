<?php

namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;
use ChromeDevtoolsProtocol\Model\Emulation\UserAgentMetadata;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetUserAgentOverrideRequestBuilder
{
	private $userAgent;

	private $acceptLanguage;

	private $platform;

	private $userAgentMetadata;


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
		$instance->acceptLanguage = $this->acceptLanguage;
		$instance->platform = $this->platform;
		$instance->userAgentMetadata = $this->userAgentMetadata;
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


	/**
	 * @param string|null $acceptLanguage
	 *
	 * @return self
	 */
	public function setAcceptLanguage($acceptLanguage): self
	{
		$this->acceptLanguage = $acceptLanguage;
		return $this;
	}


	/**
	 * @param string|null $platform
	 *
	 * @return self
	 */
	public function setPlatform($platform): self
	{
		$this->platform = $platform;
		return $this;
	}


	/**
	 * @param UserAgentMetadata|null $userAgentMetadata
	 *
	 * @return self
	 */
	public function setUserAgentMetadata($userAgentMetadata): self
	{
		$this->userAgentMetadata = $userAgentMetadata;
		return $this;
	}
}
