<?php
namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBreakpointRequestBuilder
{
	private $location;

	private $condition;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetBreakpointRequest
	{
		$instance = new SetBreakpointRequest();
		if ($this->location === null) {
			throw new BuilderException('Property [location] is required.');
		}
		$instance->location = $this->location;
		$instance->condition = $this->condition;
		return $instance;
	}


	/**
	 * @param Location $location
	 *
	 * @return self
	 */
	public function setLocation($location): self
	{
		$this->location = $location;
		return $this;
	}


	/**
	 * @param string|null $condition
	 *
	 * @return self
	 */
	public function setCondition($condition): self
	{
		$this->condition = $condition;
		return $this;
	}
}
