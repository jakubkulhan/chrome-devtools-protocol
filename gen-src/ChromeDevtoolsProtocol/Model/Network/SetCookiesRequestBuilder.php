<?php
namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetCookiesRequestBuilder
{
	private $cookies;


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
}
