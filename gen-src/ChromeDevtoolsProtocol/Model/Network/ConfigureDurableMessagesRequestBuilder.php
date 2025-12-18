<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ConfigureDurableMessagesRequestBuilder
{
	private $maxTotalBufferSize;
	private $maxResourceBufferSize;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): ConfigureDurableMessagesRequest
	{
		$instance = new ConfigureDurableMessagesRequest();
		$instance->maxTotalBufferSize = $this->maxTotalBufferSize;
		$instance->maxResourceBufferSize = $this->maxResourceBufferSize;
		return $instance;
	}


	/**
	 * @param int|null $maxTotalBufferSize
	 *
	 * @return self
	 */
	public function setMaxTotalBufferSize($maxTotalBufferSize): self
	{
		$this->maxTotalBufferSize = $maxTotalBufferSize;
		return $this;
	}


	/**
	 * @param int|null $maxResourceBufferSize
	 *
	 * @return self
	 */
	public function setMaxResourceBufferSize($maxResourceBufferSize): self
	{
		$this->maxResourceBufferSize = $maxResourceBufferSize;
		return $this;
	}
}
