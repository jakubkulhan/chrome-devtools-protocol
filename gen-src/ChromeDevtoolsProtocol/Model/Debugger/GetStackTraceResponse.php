<?php

namespace ChromeDevtoolsProtocol\Model\Debugger;

use ChromeDevtoolsProtocol\Model\Runtime\StackTrace;

/**
 * Response to Debugger.getStackTrace command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetStackTraceResponse implements \JsonSerializable
{
	/** @var StackTrace */
	public $stackTrace;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->stackTrace)) {
			$instance->stackTrace = StackTrace::fromJson($data->stackTrace);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->stackTrace !== null) {
			$data->stackTrace = $this->stackTrace->jsonSerialize();
		}
		return $data;
	}
}
