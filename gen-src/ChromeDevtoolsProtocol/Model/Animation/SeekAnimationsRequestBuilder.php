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
		if ($this->currentTime === null) {
			throw new BuilderException('Property [currentTime] is required.');
		}
		$instance->currentTime = $this->currentTime;
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
	 * @param int|float $currentTime
	 *
	 * @return self
	 */
	public function setCurrentTime($currentTime): self
	{
		$this->currentTime = $currentTime;
		return $this;
	}
}
