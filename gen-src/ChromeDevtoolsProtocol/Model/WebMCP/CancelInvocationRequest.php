<?php

namespace ChromeDevtoolsProtocol\Model\WebMCP;

/**
 * Request for WebMCP.cancelInvocation command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CancelInvocationRequest implements \JsonSerializable
{
	/**
	 * Invocation identifier to cancel.
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


	/**
	 * Create new instance using builder.
	 *
	 * @return CancelInvocationRequestBuilder
	 */
	public static function builder(): CancelInvocationRequestBuilder
	{
		return new CancelInvocationRequestBuilder();
	}
}
