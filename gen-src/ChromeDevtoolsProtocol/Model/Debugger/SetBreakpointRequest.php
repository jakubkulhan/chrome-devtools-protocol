<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.setBreakpoint command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetBreakpointRequest implements \JsonSerializable
{
	/**
	 * Location to set breakpoint in.
	 *
	 * @var Location
	 */
	public $location;

	/**
	 * Expression to use as a breakpoint condition. When specified, debugger will only stop on the breakpoint if this expression evaluates to true.
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
		if (isset($data->location)) {
			$instance->location = Location::fromJson($data->location);
		}
		if (isset($data->condition)) {
			$instance->condition = (string)$data->condition;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->location !== null) {
			$data->location = $this->location->jsonSerialize();
		}
		if ($this->condition !== null) {
			$data->condition = $this->condition;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetBreakpointRequestBuilder
	 */
	public static function builder(): SetBreakpointRequestBuilder
	{
		return new SetBreakpointRequestBuilder();
	}
}
