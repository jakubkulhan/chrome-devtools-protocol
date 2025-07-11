<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetContentsSizeRequestBuilder
{
	private $windowId;
	private $width;
	private $height;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetContentsSizeRequest
	{
		$instance = new SetContentsSizeRequest();
		if ($this->windowId === null) {
			throw new BuilderException('Property [windowId] is required.');
		}
		$instance->windowId = $this->windowId;
		$instance->width = $this->width;
		$instance->height = $this->height;
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
	 * @param int|null $width
	 *
	 * @return self
	 */
	public function setWidth($width): self
	{
		$this->width = $width;
		return $this;
	}


	/**
	 * @param int|null $height
	 *
	 * @return self
	 */
	public function setHeight($height): self
	{
		$this->height = $height;
		return $this;
	}
}
