<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

use ChromeDevtoolsProtocol\Exception\BuilderException;
use ChromeDevtoolsProtocol\Model\Network\CookieParam;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetCookiesRequestBuilder
{
	private $cookies;

	private $browserContextId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetCookiesRequest
	{
		$instance = new SetCookiesRequest();
		if ($this->cookies === null) {
			throw new BuilderException('Property [cookies] is required.');
		}
		$instance->cookies = $this->cookies;
		$instance->browserContextId = $this->browserContextId;
		return $instance;
	}


	/**
	 * @param CookieParam[] $cookies
	 *
	 * @return self
	 */
	public function setCookies($cookies): self
	{
		$this->cookies = $cookies;
		return $this;
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
