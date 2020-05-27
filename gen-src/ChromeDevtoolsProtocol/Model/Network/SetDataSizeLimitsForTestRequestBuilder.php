<?php

namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDataSizeLimitsForTestRequestBuilder
{
	private $maxTotalSize;
	private $maxResourceSize;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetDataSizeLimitsForTestRequest
	{
		$instance = new SetDataSizeLimitsForTestRequest();
		if ($this->maxTotalSize === null) {
			throw new BuilderException('Property [maxTotalSize] is required.');
		}
		$instance->maxTotalSize = $this->maxTotalSize;
		if ($this->maxResourceSize === null) {
			throw new BuilderException('Property [maxResourceSize] is required.');
		}
		$instance->maxResourceSize = $this->maxResourceSize;
		return $instance;
	}


	/**
	 * @param int $maxTotalSize
	 *
	 * @return self
	 */
	public function setMaxTotalSize($maxTotalSize): self
	{
		$this->maxTotalSize = $maxTotalSize;
		return $this;
	}


	/**
	 * @param int $maxResourceSize
	 *
	 * @return self
	 */
	public function setMaxResourceSize($maxResourceSize): self
	{
		$this->maxResourceSize = $maxResourceSize;
		return $this;
	}
}
