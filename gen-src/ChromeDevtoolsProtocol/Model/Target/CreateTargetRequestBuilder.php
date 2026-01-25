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
	private $left;
	private $top;
	private $width;
	private $height;
	private $windowState;
	private $browserContextId;
	private $enableBeginFrameControl;
	private $newWindow;
	private $background;
	private $forTab;
	private $hidden;
	private $focus;


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
		$instance->left = $this->left;
		$instance->top = $this->top;
		$instance->width = $this->width;
		$instance->height = $this->height;
		$instance->windowState = $this->windowState;
		$instance->browserContextId = $this->browserContextId;
		$instance->enableBeginFrameControl = $this->enableBeginFrameControl;
		$instance->newWindow = $this->newWindow;
		$instance->background = $this->background;
		$instance->forTab = $this->forTab;
		$instance->hidden = $this->hidden;
		$instance->focus = $this->focus;
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
	 * @param int|null $left
	 *
	 * @return self
	 */
	public function setLeft($left): self
	{
		$this->left = $left;
		return $this;
	}


	/**
	 * @param int|null $top
	 *
	 * @return self
	 */
	public function setTop($top): self
	{
		$this->top = $top;
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
	 * @param string $windowState
	 *
	 * @return self
	 */
	public function setWindowState($windowState): self
	{
		$this->windowState = $windowState;
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


	/**
	 * @param bool|null $hidden
	 *
	 * @return self
	 */
	public function setHidden($hidden): self
	{
		$this->hidden = $hidden;
		return $this;
	}


	/**
	 * @param bool|null $focus
	 *
	 * @return self
	 */
	public function setFocus($focus): self
	{
		$this->focus = $focus;
		return $this;
	}
}
