<?php

namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LoadNetworkResourceRequestBuilder
{
	private $frameId;
	private $url;
	private $options;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): LoadNetworkResourceRequest
	{
		$instance = new LoadNetworkResourceRequest();
		$instance->frameId = $this->frameId;
		if ($this->url === null) {
			throw new BuilderException('Property [url] is required.');
		}
		$instance->url = $this->url;
		if ($this->options === null) {
			throw new BuilderException('Property [options] is required.');
		}
		$instance->options = $this->options;
		return $instance;
	}


	/**
	 * @param string $frameId
	 *
	 * @return self
	 */
	public function setFrameId($frameId): self
	{
		$this->frameId = $frameId;
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


	/**
	 * @param LoadNetworkResourceOptions $options
	 *
	 * @return self
	 */
	public function setOptions($options): self
	{
		$this->options = $options;
		return $this;
	}
}
