<?php

namespace ChromeDevtoolsProtocol\Model\EventBreakpoints;

/**
 * Request for EventBreakpoints.removeInstrumentationBreakpoint command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoveInstrumentationBreakpointRequest implements \JsonSerializable
{
	/**
	 * Instrumentation name to stop on.
	 *
	 * @var string
	 */
	public $eventName;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->eventName)) {
			$instance->eventName = (string)$data->eventName;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->eventName !== null) {
			$data->eventName = $this->eventName;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return RemoveInstrumentationBreakpointRequestBuilder
	 */
	public static function builder(): RemoveInstrumentationBreakpointRequestBuilder
	{
		return new RemoveInstrumentationBreakpointRequestBuilder();
	}
}
