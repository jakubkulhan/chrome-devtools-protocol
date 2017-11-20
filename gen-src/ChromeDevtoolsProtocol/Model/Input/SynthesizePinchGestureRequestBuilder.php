<?php
namespace ChromeDevtoolsProtocol\Model\Input;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SynthesizePinchGestureRequestBuilder
{
	private $x;

	private $y;

	private $scaleFactor;

	private $relativeSpeed;

	private $gestureSourceType;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SynthesizePinchGestureRequest
	{
		$instance = new SynthesizePinchGestureRequest();
		if ($this->x === null) {
			throw new BuilderException('Property [x] is required.');
		}
		$instance->x = $this->x;
		if ($this->y === null) {
			throw new BuilderException('Property [y] is required.');
		}
		$instance->y = $this->y;
		if ($this->scaleFactor === null) {
			throw new BuilderException('Property [scaleFactor] is required.');
		}
		$instance->scaleFactor = $this->scaleFactor;
		$instance->relativeSpeed = $this->relativeSpeed;
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
	 * @param int|float $scaleFactor
	 *
	 * @return self
	 */
	public function setScaleFactor($scaleFactor): self
	{
		$this->scaleFactor = $scaleFactor;
		return $this;
	}


	/**
	 * @param int|null $relativeSpeed
	 *
	 * @return self
	 */
	public function setRelativeSpeed($relativeSpeed): self
	{
		$this->relativeSpeed = $relativeSpeed;
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
