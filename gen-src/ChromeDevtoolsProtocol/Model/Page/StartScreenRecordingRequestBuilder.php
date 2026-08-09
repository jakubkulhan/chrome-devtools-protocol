<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StartScreenRecordingRequestBuilder
{
	private $audio;
	private $maxWidth;
	private $maxHeight;
	private $frameRate;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): StartScreenRecordingRequest
	{
		$instance = new StartScreenRecordingRequest();
		$instance->audio = $this->audio;
		$instance->maxWidth = $this->maxWidth;
		$instance->maxHeight = $this->maxHeight;
		$instance->frameRate = $this->frameRate;
		return $instance;
	}


	/**
	 * @param bool|null $audio
	 *
	 * @return self
	 */
	public function setAudio($audio): self
	{
		$this->audio = $audio;
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
	 * @param int|null $frameRate
	 *
	 * @return self
	 */
	public function setFrameRate($frameRate): self
	{
		$this->frameRate = $frameRate;
		return $this;
	}
}
