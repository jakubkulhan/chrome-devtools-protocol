<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EnableRequestBuilder
{
	private $maxTotalBufferSize;
	private $maxResourceBufferSize;
	private $maxPostDataSize;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): EnableRequest
	{
		$instance = new EnableRequest();
		$instance->maxTotalBufferSize = $this->maxTotalBufferSize;
		$instance->maxResourceBufferSize = $this->maxResourceBufferSize;
		$instance->maxPostDataSize = $this->maxPostDataSize;
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


	/**
	 * @param int|null $maxPostDataSize
	 *
	 * @return self
	 */
	public function setMaxPostDataSize($maxPostDataSize): self
	{
		$this->maxPostDataSize = $maxPostDataSize;
		return $this;
	}
}
