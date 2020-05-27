<?php

namespace ChromeDevtoolsProtocol\Model\Animation;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetTimingRequestBuilder
{
	private $animationId;
	private $duration;
	private $delay;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetTimingRequest
	{
		$instance = new SetTimingRequest();
		if ($this->animationId === null) {
			throw new BuilderException('Property [animationId] is required.');
		}
		$instance->animationId = $this->animationId;
		if ($this->duration === null) {
			throw new BuilderException('Property [duration] is required.');
		}
		$instance->duration = $this->duration;
		if ($this->delay === null) {
			throw new BuilderException('Property [delay] is required.');
		}
		$instance->delay = $this->delay;
		return $instance;
	}


	/**
	 * @param string $animationId
	 *
	 * @return self
	 */
	public function setAnimationId($animationId): self
	{
		$this->animationId = $animationId;
		return $this;
	}


	/**
	 * @param int|float $duration
	 *
	 * @return self
	 */
	public function setDuration($duration): self
	{
		$this->duration = $duration;
		return $this;
	}


	/**
	 * @param int|float $delay
	 *
	 * @return self
	 */
	public function setDelay($delay): self
	{
		$this->delay = $delay;
		return $this;
	}
}
