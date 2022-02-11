<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Model\Runtime\StackTrace;
use ChromeDevtoolsProtocol\Model\Runtime\StackTraceId;

/**
 * Response to Debugger.restartFrame command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RestartFrameResponse implements \JsonSerializable
{
	/**
	 * New stack trace.
	 *
	 * @var CallFrame[]
	 */
	public $callFrames;

	/**
	 * Async stack trace, if any.
	 *
	 * @var StackTrace|null
	 */
	public $asyncStackTrace;

	/**
	 * Async stack trace, if any.
	 *
	 * @var StackTraceId|null
	 */
	public $asyncStackTraceId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->callFrames)) {
			$instance->callFrames = [];
			foreach ($data->callFrames as $item) {
				$instance->callFrames[] = CallFrame::fromJson($item);
			}
		}
		if (isset($data->asyncStackTrace)) {
			$instance->asyncStackTrace = StackTrace::fromJson($data->asyncStackTrace);
		}
		if (isset($data->asyncStackTraceId)) {
			$instance->asyncStackTraceId = StackTraceId::fromJson($data->asyncStackTraceId);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->callFrames !== null) {
			$data->callFrames = [];
			foreach ($this->callFrames as $item) {
				$data->callFrames[] = $item->jsonSerialize();
			}
		}
		if ($this->asyncStackTrace !== null) {
			$data->asyncStackTrace = $this->asyncStackTrace->jsonSerialize();
		}
		if ($this->asyncStackTraceId !== null) {
			$data->asyncStackTraceId = $this->asyncStackTraceId->jsonSerialize();
		}
		return $data;
	}
}
