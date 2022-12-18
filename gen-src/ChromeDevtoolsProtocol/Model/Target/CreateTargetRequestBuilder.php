<?php

namespace ChromeDevtoolsProtocol\Model\Target;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CreateTargetRequestBuilder
{
	private $url;
	private $width;
	private $height;
	private $browserContextId;
	private $enableBeginFrameControl;
	private $newWindow;
	private $background;
	private $forTab;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): CreateTargetRequest
	{
		$instance = new CreateTargetRequest();
		if ($this->url === null) {
			throw new BuilderException('Property [url] is required.');
		}
		$instance->url = $this->url;
		$instance->width = $this->width;
		$instance->height = $this->height;
		$instance->browserContextId = $this->browserContextId;
		$instance->enableBeginFrameControl = $this->enableBeginFrameControl;
		$instance->newWindow = $this->newWindow;
		$instance->background = $this->background;
		$instance->forTab = $this->forTab;
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


	/**
	 * @param string $browserContextId
	 *
	 * @return self
	 */
	public function setBrowserContextId($browserContextId): self
	{
		$this->browserContextId = $browserContextId;
		return $this;
	}


	/**
	 * @param bool|null $enableBeginFrameControl
	 *
	 * @return self
	 */
	public function setEnableBeginFrameControl($enableBeginFrameControl): self
	{
		$this->enableBeginFrameControl = $enableBeginFrameControl;
		return $this;
	}


	/**
	 * @param bool|null $newWindow
	 *
	 * @return self
	 */
	public function setNewWindow($newWindow): self
	{
		$this->newWindow = $newWindow;
		return $this;
	}


	/**
	 * @param bool|null $background
	 *
	 * @return self
	 */
	public function setBackground($background): self
	{
		$this->background = $background;
		return $this;
	}


	/**
	 * @param bool|null $forTab
	 *
	 * @return self
	 */
	public function setForTab($forTab): self
	{
		$this->forTab = $forTab;
		return $this;
	}
}
