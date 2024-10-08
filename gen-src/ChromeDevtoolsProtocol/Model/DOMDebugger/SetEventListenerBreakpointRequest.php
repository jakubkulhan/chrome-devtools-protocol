<?php

namespace ChromeDevtoolsProtocol\Model\DOMDebugger;

/**
 * Request for DOMDebugger.setEventListenerBreakpoint command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetEventListenerBreakpointRequest implements \JsonSerializable
{
	/**
	 * DOM Event name to stop on (any DOM event will do).
	 *
	 * @var string
	 */
	public $eventName;

	/**
	 * EventTarget interface name to stop on. If equal to `"*"` or not provided, will stop on any EventTarget.
	 *
	 * @var string|null
	 */
	public $targetName;


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
		if (isset($data->targetName)) {
			$instance->targetName = (string)$data->targetName;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->eventName !== null) {
			$data->eventName = $this->eventName;
		}
		if ($this->targetName !== null) {
			$data->targetName = $this->targetName;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetEventListenerBreakpointRequestBuilder
	 */
	public static function builder(): SetEventListenerBreakpointRequestBuilder
	{
		return new SetEventListenerBreakpointRequestBuilder();
	}
}
