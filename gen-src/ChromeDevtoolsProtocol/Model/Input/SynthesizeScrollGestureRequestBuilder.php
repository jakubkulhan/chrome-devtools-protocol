<?php

namespace ChromeDevtoolsProtocol\Model\Input;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SynthesizeScrollGestureRequestBuilder
{
	private $x;

	private $y;

	private $xDistance;

	private $yDistance;

	private $xOverscroll;

	private $yOverscroll;

	private $preventFling;

	private $speed;

	private $gestureSourceType;

	private $repeatCount;

	private $repeatDelayMs;

	private $interactionMarkerName;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SynthesizeScrollGestureRequest
	{
		$instance = new SynthesizeScrollGestureRequest();
		if ($this->x === null) {
			throw new BuilderException('Property [x] is required.');
		}
		$instance->x = $this->x;
		if ($this->y === null) {
			throw new BuilderException('Property [y] is required.');
		}
		$instance->y = $this->y;
		$instance->xDistance = $this->xDistance;
		$instance->yDistance = $this->yDistance;
		$instance->xOverscroll = $this->xOverscroll;
		$instance->yOverscroll = $this->yOverscroll;
		$instance->preventFling = $this->preventFling;
		$instance->speed = $this->speed;
		$instance->gestureSourceType = $this->gestureSourceType;
		$instance->repeatCount = $this->repeatCount;
		$instance->repeatDelayMs = $this->repeatDelayMs;
		$instance->interactionMarkerName = $this->interactionMarkerName;
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
	 * @param int|float|null $xDistance
	 *
	 * @return self
	 */
	public function setXDistance($xDistance): self
	{
		$this->xDistance = $xDistance;
		return $this;
	}


	/**
	 * @param int|float|null $yDistance
	 *
	 * @return self
	 */
	public function setYDistance($yDistance): self
	{
		$this->yDistance = $yDistance;
		return $this;
	}


	/**
	 * @param int|float|null $xOverscroll
	 *
	 * @return self
	 */
	public function setXOverscroll($xOverscroll): self
	{
		$this->xOverscroll = $xOverscroll;
		return $this;
	}


	/**
	 * @param int|float|null $yOverscroll
	 *
	 * @return self
	 */
	public function setYOverscroll($yOverscroll): self
	{
		$this->yOverscroll = $yOverscroll;
		return $this;
	}


	/**
	 * @param bool|null $preventFling
	 *
	 * @return self
	 */
	public function setPreventFling($preventFling): self
	{
		$this->preventFling = $preventFling;
		return $this;
	}


	/**
	 * @param int|null $speed
	 *
	 * @return self
	 */
	public function setSpeed($speed): self
	{
		$this->speed = $speed;
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


	/**
	 * @param int|null $repeatCount
	 *
	 * @return self
	 */
	public function setRepeatCount($repeatCount): self
	{
		$this->repeatCount = $repeatCount;
		return $this;
	}


	/**
	 * @param int|null $repeatDelayMs
	 *
	 * @return self
	 */
	public function setRepeatDelayMs($repeatDelayMs): self
	{
		$this->repeatDelayMs = $repeatDelayMs;
		return $this;
	}


	/**
	 * @param string|null $interactionMarkerName
	 *
	 * @return self
	 */
	public function setInteractionMarkerName($interactionMarkerName): self
	{
		$this->interactionMarkerName = $interactionMarkerName;
		return $this;
	}
}
