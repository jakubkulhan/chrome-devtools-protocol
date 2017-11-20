<?php
namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StartScreencastRequestBuilder
{
	private $format;

	private $quality;

	private $maxWidth;

	private $maxHeight;

	private $everyNthFrame;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): StartScreencastRequest
	{
		$instance = new StartScreencastRequest();
		$instance->format = $this->format;
		$instance->quality = $this->quality;
		$instance->maxWidth = $this->maxWidth;
		$instance->maxHeight = $this->maxHeight;
		$instance->everyNthFrame = $this->everyNthFrame;
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
	 * @param int|null $maxWidth
	 *
	 * @return self
	 */
	public function setMaxWidth($maxWidth): self
	{
		$this->maxWidth = $maxWidth;
		return $this;
	}


	/**
	 * @param int|null $maxHeight
	 *
	 * @return self
	 */
	public function setMaxHeight($maxHeight): self
	{
		$this->maxHeight = $maxHeight;
		return $this;
	}


	/**
	 * @param int|null $everyNthFrame
	 *
	 * @return self
	 */
	public function setEveryNthFrame($everyNthFrame): self
	{
		$this->everyNthFrame = $everyNthFrame;
		return $this;
	}
}
