<?php

namespace ChromeDevtoolsProtocol\Model\Input;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DispatchMouseEventRequestBuilder
{
	private $type;
	private $x;
	private $y;
	private $modifiers;
	private $timestamp;
	private $button;
	private $buttons;
	private $clickCount;
	private $force;
	private $tangentialPressure;
	private $tiltX;
	private $tiltY;
	private $twist;
	private $deltaX;
	private $deltaY;
	private $pointerType;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DispatchMouseEventRequest
	{
		$instance = new DispatchMouseEventRequest();
		if ($this->type === null) {
			throw new BuilderException('Property [type] is required.');
		}
		$instance->type = $this->type;
		if ($this->x === null) {
			throw new BuilderException('Property [x] is required.');
		}
		$instance->x = $this->x;
		if ($this->y === null) {
			throw new BuilderException('Property [y] is required.');
		}
		$instance->y = $this->y;
		$instance->modifiers = $this->modifiers;
		$instance->timestamp = $this->timestamp;
		$instance->button = $this->button;
		$instance->buttons = $this->buttons;
		$instance->clickCount = $this->clickCount;
		$instance->force = $this->force;
		$instance->tangentialPressure = $this->tangentialPressure;
		$instance->tiltX = $this->tiltX;
		$instance->tiltY = $this->tiltY;
		$instance->twist = $this->twist;
		$instance->deltaX = $this->deltaX;
		$instance->deltaY = $this->deltaY;
		$instance->pointerType = $this->pointerType;
		return $instance;
	}


	/**
	 * @param string $type
	 *
	 * @return self
	 */
	public function setType($type): self
	{
		$this->type = $type;
		return $this;
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
	 * @param int|null $modifiers
	 *
	 * @return self
	 */
	public function setModifiers($modifiers): self
	{
		$this->modifiers = $modifiers;
		return $this;
	}


	/**
	 * @param int|float $timestamp
	 *
	 * @return self
	 */
	public function setTimestamp($timestamp): self
	{
		$this->timestamp = $timestamp;
		return $this;
	}


	/**
	 * @param string $button
	 *
	 * @return self
	 */
	public function setButton($button): self
	{
		$this->button = $button;
		return $this;
	}


	/**
	 * @param int|null $buttons
	 *
	 * @return self
	 */
	public function setButtons($buttons): self
	{
		$this->buttons = $buttons;
		return $this;
	}


	/**
	 * @param int|null $clickCount
	 *
	 * @return self
	 */
	public function setClickCount($clickCount): self
	{
		$this->clickCount = $clickCount;
		return $this;
	}


	/**
	 * @param int|float|null $force
	 *
	 * @return self
	 */
	public function setForce($force): self
	{
		$this->force = $force;
		return $this;
	}


	/**
	 * @param int|float|null $tangentialPressure
	 *
	 * @return self
	 */
	public function setTangentialPressure($tangentialPressure): self
	{
		$this->tangentialPressure = $tangentialPressure;
		return $this;
	}


	/**
	 * @param int|float|null $tiltX
	 *
	 * @return self
	 */
	public function setTiltX($tiltX): self
	{
		$this->tiltX = $tiltX;
		return $this;
	}


	/**
	 * @param int|float|null $tiltY
	 *
	 * @return self
	 */
	public function setTiltY($tiltY): self
	{
		$this->tiltY = $tiltY;
		return $this;
	}


	/**
	 * @param int|null $twist
	 *
	 * @return self
	 */
	public function setTwist($twist): self
	{
		$this->twist = $twist;
		return $this;
	}


	/**
	 * @param int|float|null $deltaX
	 *
	 * @return self
	 */
	public function setDeltaX($deltaX): self
	{
		$this->deltaX = $deltaX;
		return $this;
	}


	/**
	 * @param int|float|null $deltaY
	 *
	 * @return self
	 */
	public function setDeltaY($deltaY): self
	{
		$this->deltaY = $deltaY;
		return $this;
	}


	/**
	 * @param string|null $pointerType
	 *
	 * @return self
	 */
	public function setPointerType($pointerType): self
	{
		$this->pointerType = $pointerType;
		return $this;
	}
}
