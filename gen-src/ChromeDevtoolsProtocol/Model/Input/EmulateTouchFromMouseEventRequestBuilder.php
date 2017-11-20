<?php
namespace ChromeDevtoolsProtocol\Model\Input;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EmulateTouchFromMouseEventRequestBuilder
{
	private $type;

	private $x;

	private $y;

	private $timestamp;

	private $button;

	private $deltaX;

	private $deltaY;

	private $modifiers;

	private $clickCount;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): EmulateTouchFromMouseEventRequest
	{
		$instance = new EmulateTouchFromMouseEventRequest();
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
		if ($this->timestamp === null) {
			throw new BuilderException('Property [timestamp] is required.');
		}
		$instance->timestamp = $this->timestamp;
		if ($this->button === null) {
			throw new BuilderException('Property [button] is required.');
		}
		$instance->button = $this->button;
		$instance->deltaX = $this->deltaX;
		$instance->deltaY = $this->deltaY;
		$instance->modifiers = $this->modifiers;
		$instance->clickCount = $this->clickCount;
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
	 * @param int $x
	 *
	 * @return self
	 */
	public function setX($x): self
	{
		$this->x = $x;
		return $this;
	}


	/**
	 * @param int $y
	 *
	 * @return self
	 */
	public function setY($y): self
	{
		$this->y = $y;
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
	 * @param int|null $clickCount
	 *
	 * @return self
	 */
	public function setClickCount($clickCount): self
	{
		$this->clickCount = $clickCount;
		return $this;
	}
}
