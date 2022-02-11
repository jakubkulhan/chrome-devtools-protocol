<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.setBreakpointOnFunctionCall command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBreakpointOnFunctionCallRequest implements \JsonSerializable
{
	/**
	 * Function object id.
	 *
	 * @var string
	 */
	public $objectId;

	/**
	 * Expression to use as a breakpoint condition. When specified, debugger will stop on the breakpoint if this expression evaluates to true.
	 *
	 * @var string|null
	 */
	public $condition;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->objectId)) {
			$instance->objectId = (string)$data->objectId;
		}
		if (isset($data->condition)) {
			$instance->condition = (string)$data->condition;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->objectId !== null) {
			$data->objectId = $this->objectId;
		}
		if ($this->condition !== null) {
			$data->condition = $this->condition;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetBreakpointOnFunctionCallRequestBuilder
	 */
	public static function builder(): SetBreakpointOnFunctionCallRequestBuilder
	{
		return new SetBreakpointOnFunctionCallRequestBuilder();
	}
}
