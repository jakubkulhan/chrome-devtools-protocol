<?php

namespace ChromeDevtoolsProtocol\Model\WebMCP;

/**
 * Event fired when a tool invocation starts.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ToolInvokedEvent implements \JsonSerializable
{
	/**
	 * Name of the tool to invoke.
	 *
	 * @var string
	 */
	public $toolName;

	/**
	 * Frame id
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * Invocation identifier.
	 *
	 * @var string
	 */
	public $invocationId;

	/**
	 * The input parameters used for the invocation.
	 *
	 * @var string
	 */
	public $input;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->toolName)) {
			$instance->toolName = (string)$data->toolName;
		}
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->invocationId)) {
			$instance->invocationId = (string)$data->invocationId;
		}
		if (isset($data->input)) {
			$instance->input = (string)$data->input;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->toolName !== null) {
			$data->toolName = $this->toolName;
		}
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->invocationId !== null) {
			$data->invocationId = $this->invocationId;
		}
		if ($this->input !== null) {
			$data->input = $this->input;
		}
		return $data;
	}
}
