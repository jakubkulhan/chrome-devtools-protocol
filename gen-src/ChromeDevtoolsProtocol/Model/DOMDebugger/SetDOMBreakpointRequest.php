<?php

namespace ChromeDevtoolsProtocol\Model\DOMDebugger;

/**
 * Request for DOMDebugger.setDOMBreakpoint command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDOMBreakpointRequest implements \JsonSerializable
{
	/**
	 * Identifier of the node to set breakpoint on.
	 *
	 * @var int
	 */
	public $nodeId;

	/**
	 * Type of the operation to stop upon.
	 *
	 * @var string
	 */
	public $type;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetDOMBreakpointRequestBuilder
	 */
	public static function builder(): SetDOMBreakpointRequestBuilder
	{
		return new SetDOMBreakpointRequestBuilder();
	}
}
