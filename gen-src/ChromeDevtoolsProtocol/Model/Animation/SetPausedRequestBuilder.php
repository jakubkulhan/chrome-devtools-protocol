<?php

namespace ChromeDevtoolsProtocol\Model\Animation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPausedRequestBuilder
{
	private $animations;
	private $paused;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetPausedRequest
	{
		$instance = new SetPausedRequest();
		if ($this->animations === null) {
			throw new BuilderException('Property [animations] is required.');
		}
		$instance->animations = $this->animations;
		if ($this->paused === null) {
			throw new BuilderException('Property [paused] is required.');
		}
		$instance->paused = $this->paused;
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
	 * @param bool $paused
	 *
	 * @return self
	 */
	public function setPaused($paused): self
	{
		$this->paused = $paused;
		return $this;
	}
}
