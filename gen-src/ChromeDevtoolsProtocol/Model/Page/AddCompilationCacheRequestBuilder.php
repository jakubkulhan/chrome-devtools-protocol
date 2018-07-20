<?php
namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddCompilationCacheRequestBuilder
{
	private $url;

	private $data;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): AddCompilationCacheRequest
	{
		$instance = new AddCompilationCacheRequest();
		if ($this->url === null) {
			throw new BuilderException('Property [url] is required.');
		}
		$instance->url = $this->url;
		if ($this->data === null) {
			throw new BuilderException('Property [data] is required.');
		}
		$instance->data = $this->data;
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


	/**
	 * @param string $data
	 *
	 * @return self
	 */
	public function setData($data): self
	{
		$this->data = $data;
		return $this;
	}
}
