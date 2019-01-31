<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBreakpointOnFunctionCallRequestBuilder
{
	private $objectId;

	private $condition;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetBreakpointOnFunctionCallRequest
	{
		$instance = new SetBreakpointOnFunctionCallRequest();
		if ($this->objectId === null) {
			throw new BuilderException('Property [objectId] is required.');
		}
		$instance->objectId = $this->objectId;
		$instance->condition = $this->condition;
		return $instance;
	}


	/**
	 * @param string $objectId
	 *
	 * @return self
	 */
	public function setObjectId($objectId): self
	{
		$this->objectId = $objectId;
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
