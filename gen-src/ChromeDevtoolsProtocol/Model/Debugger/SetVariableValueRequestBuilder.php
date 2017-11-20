<?php
namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Exception\BuilderException;
use ChromeDevtoolsProtocol\Model\Runtime\CallArgument;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetVariableValueRequestBuilder
{
	private $scopeNumber;

	private $variableName;

	private $newValue;

	private $callFrameId;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetVariableValueRequest
	{
		$instance = new SetVariableValueRequest();
		if ($this->scopeNumber === null) {
			throw new BuilderException('Property [scopeNumber] is required.');
		}
		$instance->scopeNumber = $this->scopeNumber;
		if ($this->variableName === null) {
			throw new BuilderException('Property [variableName] is required.');
		}
		$instance->variableName = $this->variableName;
		if ($this->newValue === null) {
			throw new BuilderException('Property [newValue] is required.');
		}
		$instance->newValue = $this->newValue;
		if ($this->callFrameId === null) {
			throw new BuilderException('Property [callFrameId] is required.');
		}
		$instance->callFrameId = $this->callFrameId;
		return $instance;
	}


	/**
	 * @param int $scopeNumber
	 *
	 * @return self
	 */
	public function setScopeNumber($scopeNumber): self
	{
		$this->scopeNumber = $scopeNumber;
		return $this;
	}


	/**
	 * @param string $variableName
	 *
	 * @return self
	 */
	public function setVariableName($variableName): self
	{
		$this->variableName = $variableName;
		return $this;
	}


	/**
	 * @param CallArgument $newValue
	 *
	 * @return self
	 */
	public function setNewValue($newValue): self
	{
		$this->newValue = $newValue;
		return $this;
	}


	/**
	 * @param string $callFrameId
	 *
	 * @return self
	 */
	public function setCallFrameId($callFrameId): self
	{
		$this->callFrameId = $callFrameId;
		return $this;
	}
}
