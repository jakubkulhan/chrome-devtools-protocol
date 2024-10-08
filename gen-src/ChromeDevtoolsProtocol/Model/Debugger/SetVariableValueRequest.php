<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Model\Runtime\CallArgument;

/**
 * Request for Debugger.setVariableValue command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetVariableValueRequest implements \JsonSerializable
{
	/**
	 * 0-based number of scope as was listed in scope chain. Only 'local', 'closure' and 'catch' scope types are allowed. Other scopes could be manipulated manually.
	 *
	 * @var int
	 */
	public $scopeNumber;

	/**
	 * Variable name.
	 *
	 * @var string
	 */
	public $variableName;

	/**
	 * New variable value.
	 *
	 * @var CallArgument
	 */
	public $newValue;

	/**
	 * Id of callframe that holds variable.
	 *
	 * @var string
	 */
	public $callFrameId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scopeNumber)) {
			$instance->scopeNumber = (int)$data->scopeNumber;
		}
		if (isset($data->variableName)) {
			$instance->variableName = (string)$data->variableName;
		}
		if (isset($data->newValue)) {
			$instance->newValue = CallArgument::fromJson($data->newValue);
		}
		if (isset($data->callFrameId)) {
			$instance->callFrameId = (string)$data->callFrameId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scopeNumber !== null) {
			$data->scopeNumber = $this->scopeNumber;
		}
		if ($this->variableName !== null) {
			$data->variableName = $this->variableName;
		}
		if ($this->newValue !== null) {
			$data->newValue = $this->newValue->jsonSerialize();
		}
		if ($this->callFrameId !== null) {
			$data->callFrameId = $this->callFrameId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetVariableValueRequestBuilder
	 */
	public static function builder(): SetVariableValueRequestBuilder
	{
		return new SetVariableValueRequestBuilder();
	}
}
