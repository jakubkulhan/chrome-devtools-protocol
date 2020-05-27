<?php

namespace ChromeDevtoolsProtocol\Model\Input;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SynthesizeTapGestureRequestBuilder
{
	private $x;
	private $y;
	private $duration;
	private $tapCount;
	private $gestureSourceType;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SynthesizeTapGestureRequest
	{
		$instance = new SynthesizeTapGestureRequest();
		if ($this->x === null) {
			throw new BuilderException('Property [x] is required.');
		}
		$instance->x = $this->x;
		if ($this->y === null) {
			throw new BuilderException('Property [y] is required.');
		}
		$instance->y = $this->y;
		$instance->duration = $this->duration;
		$instance->tapCount = $this->tapCount;
		$instance->gestureSourceType = $this->gestureSourceType;
		return $instance;
	}


	/**
	 * @param int|float $x
	 *
	 * @return self
	 */
	public function setX($x): self
	{
		$this->x = $x;
		return $this;
	}


	/**
	 * @param int|float $y
	 *
	 * @return self
	 */
	public function setY($y): self
	{
		$this->y = $y;
		return $this;
	}


	/**
	 * @param int|null $duration
	 *
	 * @return self
	 */
	public function setDuration($duration): self
	{
		$this->duration = $duration;
		return $this;
	}


	/**
	 * @param int|null $tapCount
	 *
	 * @return self
	 */
	public function setTapCount($tapCount): self
	{
		$this->tapCount = $tapCount;
		return $this;
	}


	/**
	 * @param string $gestureSourceType
	 *
	 * @return self
	 */
	public function setGestureSourceType($gestureSourceType): self
	{
		$this->gestureSourceType = $gestureSourceType;
		return $this;
	}
}
