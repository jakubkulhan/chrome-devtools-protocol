<?php

namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeleteCookieRequestBuilder
{
	private $cookieName;
	private $url;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DeleteCookieRequest
	{
		$instance = new DeleteCookieRequest();
		if ($this->cookieName === null) {
			throw new BuilderException('Property [cookieName] is required.');
		}
		$instance->cookieName = $this->cookieName;
		if ($this->url === null) {
			throw new BuilderException('Property [url] is required.');
		}
		$instance->url = $this->url;
		return $instance;
	}


	/**
	 * @param string $cookieName
	 *
	 * @return self
	 */
	public function setCookieName($cookieName): self
	{
		$this->cookieName = $cookieName;
		return $this;
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
