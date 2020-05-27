<?php

namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Exception\BuilderException;
use ChromeDevtoolsProtocol\Model\Emulation\ScreenOrientation;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDeviceMetricsOverrideRequestBuilder
{
	private $width;
	private $height;
	private $deviceScaleFactor;
	private $mobile;
	private $scale;
	private $screenWidth;
	private $screenHeight;
	private $positionX;
	private $positionY;
	private $dontSetVisibleSize;
	private $screenOrientation;
	private $viewport;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetDeviceMetricsOverrideRequest
	{
		$instance = new SetDeviceMetricsOverrideRequest();
		if ($this->width === null) {
			throw new BuilderException('Property [width] is required.');
		}
		$instance->width = $this->width;
		if ($this->height === null) {
			throw new BuilderException('Property [height] is required.');
		}
		$instance->height = $this->height;
		if ($this->deviceScaleFactor === null) {
			throw new BuilderException('Property [deviceScaleFactor] is required.');
		}
		$instance->deviceScaleFactor = $this->deviceScaleFactor;
		if ($this->mobile === null) {
			throw new BuilderException('Property [mobile] is required.');
		}
		$instance->mobile = $this->mobile;
		$instance->scale = $this->scale;
		$instance->screenWidth = $this->screenWidth;
		$instance->screenHeight = $this->screenHeight;
		$instance->positionX = $this->positionX;
		$instance->positionY = $this->positionY;
		$instance->dontSetVisibleSize = $this->dontSetVisibleSize;
		$instance->screenOrientation = $this->screenOrientation;
		$instance->viewport = $this->viewport;
		return $instance;
	}


	/**
	 * @param int $width
	 *
	 * @return self
	 */
	public function setWidth($width): self
	{
		$this->width = $width;
		return $this;
	}


	/**
	 * @param int $height
	 *
	 * @return self
	 */
	public function setHeight($height): self
	{
		$this->height = $height;
		return $this;
	}


	/**
	 * @param int|float $deviceScaleFactor
	 *
	 * @return self
	 */
	public function setDeviceScaleFactor($deviceScaleFactor): self
	{
		$this->deviceScaleFactor = $deviceScaleFactor;
		return $this;
	}


	/**
	 * @param bool $mobile
	 *
	 * @return self
	 */
	public function setMobile($mobile): self
	{
		$this->mobile = $mobile;
		return $this;
	}


	/**
	 * @param int|float|null $scale
	 *
	 * @return self
	 */
	public function setScale($scale): self
	{
		$this->scale = $scale;
		return $this;
	}


	/**
	 * @param int|null $screenWidth
	 *
	 * @return self
	 */
	public function setScreenWidth($screenWidth): self
	{
		$this->screenWidth = $screenWidth;
		return $this;
	}


	/**
	 * @param int|null $screenHeight
	 *
	 * @return self
	 */
	public function setScreenHeight($screenHeight): self
	{
		$this->screenHeight = $screenHeight;
		return $this;
	}


	/**
	 * @param int|null $positionX
	 *
	 * @return self
	 */
	public function setPositionX($positionX): self
	{
		$this->positionX = $positionX;
		return $this;
	}


	/**
	 * @param int|null $positionY
	 *
	 * @return self
	 */
	public function setPositionY($positionY): self
	{
		$this->positionY = $positionY;
		return $this;
	}


	/**
	 * @param bool|null $dontSetVisibleSize
	 *
	 * @return self
	 */
	public function setDontSetVisibleSize($dontSetVisibleSize): self
	{
		$this->dontSetVisibleSize = $dontSetVisibleSize;
		return $this;
	}


	/**
	 * @param ScreenOrientation|null $screenOrientation
	 *
	 * @return self
	 */
	public function setScreenOrientation($screenOrientation): self
	{
		$this->screenOrientation = $screenOrientation;
		return $this;
	}


	/**
	 * @param Viewport|null $viewport
	 *
	 * @return self
	 */
	public function setViewport($viewport): self
	{
		$this->viewport = $viewport;
		return $this;
	}
}
