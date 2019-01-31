<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetWindowBoundsRequestBuilder
{
	private $windowId;

	private $bounds;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetWindowBoundsRequest
	{
		$instance = new SetWindowBoundsRequest();
		if ($this->windowId === null) {
			throw new BuilderException('Property [windowId] is required.');
		}
		$instance->windowId = $this->windowId;
		if ($this->bounds === null) {
			throw new BuilderException('Property [bounds] is required.');
		}
		$instance->bounds = $this->bounds;
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


	/**
	 * @param Bounds $bounds
	 *
	 * @return self
	 */
	public function setBounds($bounds): self
	{
		$this->bounds = $bounds;
		return $this;
	}
}
