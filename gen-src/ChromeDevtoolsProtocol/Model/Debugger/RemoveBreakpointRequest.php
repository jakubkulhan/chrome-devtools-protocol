<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

/**
 * Request for Debugger.removeBreakpoint command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoveBreakpointRequest implements \JsonSerializable
{
	/** @var string */
	public $breakpointId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->breakpointId)) {
			$instance->breakpointId = (string)$data->breakpointId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->breakpointId !== null) {
			$data->breakpointId = $this->breakpointId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return RemoveBreakpointRequestBuilder
	 */
	public static function builder(): RemoveBreakpointRequestBuilder
	{
		return new RemoveBreakpointRequestBuilder();
	}
}
