<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Model\Runtime\StackTraceId;

/**
 * Request for Debugger.getStackTrace command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetStackTraceRequest implements \JsonSerializable
{
	/** @var StackTraceId */
	public $stackTraceId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->stackTraceId)) {
			$instance->stackTraceId = StackTraceId::fromJson($data->stackTraceId);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->stackTraceId !== null) {
			$data->stackTraceId = $this->stackTraceId->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetStackTraceRequestBuilder
	 */
	public static function builder(): GetStackTraceRequestBuilder
	{
		return new GetStackTraceRequestBuilder();
	}
}
