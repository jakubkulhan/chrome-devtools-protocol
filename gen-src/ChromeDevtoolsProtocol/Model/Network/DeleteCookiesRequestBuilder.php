<?php
namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeleteCookiesRequestBuilder
{
	private $name;

	private $url;

	private $domain;

	private $path;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DeleteCookiesRequest
	{
		$instance = new DeleteCookiesRequest();
		if ($this->name === null) {
			throw new BuilderException('Property [name] is required.');
		}
		$instance->name = $this->name;
		$instance->url = $this->url;
		$instance->domain = $this->domain;
		$instance->path = $this->path;
		return $instance;
	}


	/**
	 * @param string $name
	 *
	 * @return self
	 */
	public function setName($name): self
	{
		$this->name = $name;
		return $this;
	}


	/**
	 * @param string|null $url
	 *
	 * @return self
	 */
	public function setUrl($url): self
	{
		$this->url = $url;
		return $this;
	}


	/**
	 * @param string|null $domain
	 *
	 * @return self
	 */
	public function setDomain($domain): self
	{
		$this->domain = $domain;
		return $this;
	}


	/**
	 * @param string|null $path
	 *
	 * @return self
	 */
	public function setPath($path): self
	{
		$this->path = $path;
		return $this;
	}
}
