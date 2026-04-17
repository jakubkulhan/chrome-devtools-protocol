<?php

namespace ChromeDevtoolsProtocol\Model\WebMCP;

/**
 * Request for WebMCP.invokeTool command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InvokeToolRequest implements \JsonSerializable
{
	/**
	 * Frame in which to invoke the tool.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * Name of the tool to invoke.
	 *
	 * @var string
	 */
	public $toolName;

	/**
	 * Input parameters for the tool, matching the tool's inputSchema.
	 *
	 * @var object
	 */
	public $input;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->toolName)) {
			$instance->toolName = (string)$data->toolName;
		}
		if (isset($data->input)) {
			$instance->input = $data->input;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->toolName !== null) {
			$data->toolName = $this->toolName;
		}
		if ($this->input !== null) {
			$data->input = $this->input;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return InvokeToolRequestBuilder
	 */
	public static function builder(): InvokeToolRequestBuilder
	{
		return new InvokeToolRequestBuilder();
	}
}
