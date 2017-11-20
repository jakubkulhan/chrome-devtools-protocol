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
}
