<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Model\Runtime\ExceptionDetails;
use ChromeDevtoolsProtocol\Model\Runtime\StackTrace;
use ChromeDevtoolsProtocol\Model\Runtime\StackTraceId;

/**
 * Response to Debugger.setScriptSource command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetScriptSourceResponse implements \JsonSerializable
{
	/**
	 * New stack trace in case editing has happened while VM was stopped.
	 *
	 * @var CallFrame[]|null
	 */
	public $callFrames;

	/**
	 * Whether current call stack was modified after applying the changes.
	 *
	 * @var bool|null
	 */
	public $stackChanged;

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
	 * Exception details if any.
	 *
	 * @var ExceptionDetails|null
	 */
	public $exceptionDetails;


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
		if (isset($data->stackChanged)) {
			$instance->stackChanged = (bool)$data->stackChanged;
		}
		if (isset($data->asyncStackTrace)) {
			$instance->asyncStackTrace = StackTrace::fromJson($data->asyncStackTrace);
		}
		if (isset($data->asyncStackTraceId)) {
			$instance->asyncStackTraceId = StackTraceId::fromJson($data->asyncStackTraceId);
		}
		if (isset($data->exceptionDetails)) {
			$instance->exceptionDetails = ExceptionDetails::fromJson($data->exceptionDetails);
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
		if ($this->stackChanged !== null) {
			$data->stackChanged = $this->stackChanged;
		}
		if ($this->asyncStackTrace !== null) {
			$data->asyncStackTrace = $this->asyncStackTrace->jsonSerialize();
		}
		if ($this->asyncStackTraceId !== null) {
			$data->asyncStackTraceId = $this->asyncStackTraceId->jsonSerialize();
		}
		if ($this->exceptionDetails !== null) {
			$data->exceptionDetails = $this->exceptionDetails->jsonSerialize();
		}
		return $data;
	}
}
