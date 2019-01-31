<?php

namespace ChromeDevtoolsProtocol\Model\HeadlessExperimental;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BeginFrameRequestBuilder
{
	private $frameTimeTicks;

	private $interval;

	private $noDisplayUpdates;

	private $screenshot;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): BeginFrameRequest
	{
		$instance = new BeginFrameRequest();
		$instance->frameTimeTicks = $this->frameTimeTicks;
		$instance->interval = $this->interval;
		$instance->noDisplayUpdates = $this->noDisplayUpdates;
		$instance->screenshot = $this->screenshot;
		return $instance;
	}


	/**
	 * @param int|float|null $frameTimeTicks
	 *
	 * @return self
	 */
	public function setFrameTimeTicks($frameTimeTicks): self
	{
		$this->frameTimeTicks = $frameTimeTicks;
		return $this;
	}


	/**
	 * @param int|float|null $interval
	 *
	 * @return self
	 */
	public function setInterval($interval): self
	{
		$this->interval = $interval;
		return $this;
	}


	/**
	 * @param bool|null $noDisplayUpdates
	 *
	 * @return self
	 */
	public function setNoDisplayUpdates($noDisplayUpdates): self
	{
		$this->noDisplayUpdates = $noDisplayUpdates;
		return $this;
	}


	/**
	 * @param ScreenshotParams|null $screenshot
	 *
	 * @return self
	 */
	public function setScreenshot($screenshot): self
	{
		$this->screenshot = $screenshot;
		return $this;
	}
}
