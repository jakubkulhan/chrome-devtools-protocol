<?php

namespace ChromeDevtoolsProtocol\Model\Input;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DispatchDragEventRequestBuilder
{
	private $type;
	private $x;
	private $y;
	private $data;
	private $modifiers;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): DispatchDragEventRequest
	{
		$instance = new DispatchDragEventRequest();
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
		if ($this->data === null) {
			throw new BuilderException('Property [data] is required.');
		}
		$instance->data = $this->data;
		$instance->modifiers = $this->modifiers;
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
	 * @param DragData $data
	 *
	 * @return self
	 */
	public function setData($data): self
	{
		$this->data = $data;
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
}
