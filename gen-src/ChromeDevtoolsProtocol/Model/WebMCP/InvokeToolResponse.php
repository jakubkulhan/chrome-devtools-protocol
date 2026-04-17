<?php

namespace ChromeDevtoolsProtocol\Model\WebMCP;

/**
 * Response to WebMCP.invokeTool command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InvokeToolResponse implements \JsonSerializable
{
	/**
	 * Unique identifier for this invocation. Response is sent before tool events.
	 *
	 * @var string
	 */
	public $invocationId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->invocationId)) {
			$instance->invocationId = (string)$data->invocationId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->invocationId !== null) {
			$data->invocationId = $this->invocationId;
		}
		return $data;
	}
}
