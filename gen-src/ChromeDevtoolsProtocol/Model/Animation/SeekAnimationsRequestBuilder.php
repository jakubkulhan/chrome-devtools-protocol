<?php

namespace ChromeDevtoolsProtocol\Model\Animation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SeekAnimationsRequestBuilder
{
	private $animations;
	private $currentTime;
	private $currentTimes;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SeekAnimationsRequest
	{
		$instance = new SeekAnimationsRequest();
		if ($this->animations === null) {
			throw new BuilderException('Property [animations] is required.');
		}
		$instance->animations = $this->animations;
		$instance->currentTime = $this->currentTime;
		$instance->currentTimes = $this->currentTimes;
		return $instance;
	}


	/**
	 * @param string[] $animations
	 *
	 * @return self
	 */
	public function setAnimations($animations): self
	{
		$this->animations = $animations;
		return $this;
	}


	/**
	 * @param int|float|null $currentTime
	 *
	 * @return self
	 */
	public function setCurrentTime($currentTime): self
	{
		$this->currentTime = $currentTime;
		return $this;
	}


	/**
	 * @param int[]|float[]|null $currentTimes
	 *
	 * @return self
	 */
	public function setCurrentTimes($currentTimes): self
	{
		$this->currentTimes = $currentTimes;
		return $this;
	}
}
