<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Model\Runtime\ExceptionDetails;
use ChromeDevtoolsProtocol\Model\Runtime\RemoteObject;

/**
 * Response to Debugger.evaluateOnCallFrame command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EvaluateOnCallFrameResponse implements \JsonSerializable
{
	/**
	 * Object wrapper for the evaluation result.
	 *
	 * @var RemoteObject
	 */
	public $result;

	/**
	 * Exception details.
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
		if (isset($data->result)) {
			$instance->result = RemoteObject::fromJson($data->result);
		}
		if (isset($data->exceptionDetails)) {
			$instance->exceptionDetails = ExceptionDetails::fromJson($data->exceptionDetails);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->result !== null) {
			$data->result = $this->result->jsonSerialize();
		}
		if ($this->exceptionDetails !== null) {
			$data->exceptionDetails = $this->exceptionDetails->jsonSerialize();
		}
		return $data;
	}
}
