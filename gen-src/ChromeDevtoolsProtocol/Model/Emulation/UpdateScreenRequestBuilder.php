<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class UpdateScreenRequestBuilder
{
	private $screenId;
	private $left;
	private $top;
	private $width;
	private $height;
	private $workAreaInsets;
	private $devicePixelRatio;
	private $rotation;
	private $colorDepth;
	private $label;
	private $isInternal;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): UpdateScreenRequest
	{
		$instance = new UpdateScreenRequest();
		if ($this->screenId === null) {
			throw new BuilderException('Property [screenId] is required.');
		}
		$instance->screenId = $this->screenId;
		$instance->left = $this->left;
		$instance->top = $this->top;
		$instance->width = $this->width;
		$instance->height = $this->height;
		$instance->workAreaInsets = $this->workAreaInsets;
		$instance->devicePixelRatio = $this->devicePixelRatio;
		$instance->rotation = $this->rotation;
		$instance->colorDepth = $this->colorDepth;
		$instance->label = $this->label;
		$instance->isInternal = $this->isInternal;
		return $instance;
	}


	/**
	 * @param string $screenId
	 *
	 * @return self
	 */
	public function setScreenId($screenId): self
	{
		$this->screenId = $screenId;
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
	 * @param WorkAreaInsets|null $workAreaInsets
	 *
	 * @return self
	 */
	public function setWorkAreaInsets($workAreaInsets): self
	{
		$this->workAreaInsets = $workAreaInsets;
		return $this;
	}


	/**
	 * @param int|float|null $devicePixelRatio
	 *
	 * @return self
	 */
	public function setDevicePixelRatio($devicePixelRatio): self
	{
		$this->devicePixelRatio = $devicePixelRatio;
		return $this;
	}


	/**
	 * @param int|null $rotation
	 *
	 * @return self
	 */
	public function setRotation($rotation): self
	{
		$this->rotation = $rotation;
		return $this;
	}


	/**
	 * @param int|null $colorDepth
	 *
	 * @return self
	 */
	public function setColorDepth($colorDepth): self
	{
		$this->colorDepth = $colorDepth;
		return $this;
	}


	/**
	 * @param string|null $label
	 *
	 * @return self
	 */
	public function setLabel($label): self
	{
		$this->label = $label;
		return $this;
	}


	/**
	 * @param bool|null $isInternal
	 *
	 * @return self
	 */
	public function setIsInternal($isInternal): self
	{
		$this->isInternal = $isInternal;
		return $this;
	}
}
