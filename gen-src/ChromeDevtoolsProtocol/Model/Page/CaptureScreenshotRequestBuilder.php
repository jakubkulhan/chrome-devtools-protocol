<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CaptureScreenshotRequestBuilder
{
	private $format;
	private $quality;
	private $clip;
	private $fromSurface;
	private $captureBeyondViewport;
	private $optimizeForSpeed;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): CaptureScreenshotRequest
	{
		$instance = new CaptureScreenshotRequest();
		$instance->format = $this->format;
		$instance->quality = $this->quality;
		$instance->clip = $this->clip;
		$instance->fromSurface = $this->fromSurface;
		$instance->captureBeyondViewport = $this->captureBeyondViewport;
		$instance->optimizeForSpeed = $this->optimizeForSpeed;
		return $instance;
	}


	/**
	 * @param string|null $format
	 *
	 * @return self
	 */
	public function setFormat($format): self
	{
		$this->format = $format;
		return $this;
	}


	/**
	 * @param int|null $quality
	 *
	 * @return self
	 */
	public function setQuality($quality): self
	{
		$this->quality = $quality;
		return $this;
	}


	/**
	 * @param Viewport|null $clip
	 *
	 * @return self
	 */
	public function setClip($clip): self
	{
		$this->clip = $clip;
		return $this;
	}


	/**
	 * @param bool|null $fromSurface
	 *
	 * @return self
	 */
	public function setFromSurface($fromSurface): self
	{
		$this->fromSurface = $fromSurface;
		return $this;
	}


	/**
	 * @param bool|null $captureBeyondViewport
	 *
	 * @return self
	 */
	public function setCaptureBeyondViewport($captureBeyondViewport): self
	{
		$this->captureBeyondViewport = $captureBeyondViewport;
		return $this;
	}


	/**
	 * @param bool|null $optimizeForSpeed
	 *
	 * @return self
	 */
	public function setOptimizeForSpeed($optimizeForSpeed): self
	{
		$this->optimizeForSpeed = $optimizeForSpeed;
		return $this;
	}
}
