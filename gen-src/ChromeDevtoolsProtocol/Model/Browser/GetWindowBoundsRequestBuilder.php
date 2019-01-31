<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetWindowBoundsRequestBuilder
{
	private $windowId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): GetWindowBoundsRequest
	{
		$instance = new GetWindowBoundsRequest();
		if ($this->windowId === null) {
			throw new BuilderException('Property [windowId] is required.');
		}
		$instance->windowId = $this->windowId;
		return $instance;
	}


	/**
	 * @param int $windowId
	 *
	 * @return self
	 */
	public function setWindowId($windowId): self
	{
		$this->windowId = $windowId;
		return $this;
	}
}
