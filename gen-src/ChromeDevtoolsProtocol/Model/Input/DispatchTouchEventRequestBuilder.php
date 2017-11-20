<?php
namespace ChromeDevtoolsProtocol\Model\Input;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DispatchTouchEventRequestBuilder
{
	private $type;

	private $touchPoints;

	private $modifiers;

	private $timestamp;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DispatchTouchEventRequest
	{
		$instance = new DispatchTouchEventRequest();
		if ($this->type === null) {
			throw new BuilderException('Property [type] is required.');
		}
		$instance->type = $this->type;
		if ($this->touchPoints === null) {
			throw new BuilderException('Property [touchPoints] is required.');
		}
		$instance->touchPoints = $this->touchPoints;
		$instance->modifiers = $this->modifiers;
		$instance->timestamp = $this->timestamp;
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
	 * @param TouchPoint[] $touchPoints
	 *
	 * @return self
	 */
	public function setTouchPoints($touchPoints): self
	{
		$this->touchPoints = $touchPoints;
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
}
