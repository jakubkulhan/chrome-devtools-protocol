<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Model\Runtime\StackTraceId;

/**
 * Request for Debugger.pauseOnAsyncCall command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PauseOnAsyncCallRequest implements \JsonSerializable
{
	/**
	 * Debugger will pause when async call with given stack trace is started.
	 *
	 * @var StackTraceId
	 */
	public $parentStackTraceId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->parentStackTraceId)) {
			$instance->parentStackTraceId = StackTraceId::fromJson($data->parentStackTraceId);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->parentStackTraceId !== null) {
			$data->parentStackTraceId = $this->parentStackTraceId->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return PauseOnAsyncCallRequestBuilder
	 */
	public static function builder(): PauseOnAsyncCallRequestBuilder
	{
		return new PauseOnAsyncCallRequestBuilder();
	}
}
