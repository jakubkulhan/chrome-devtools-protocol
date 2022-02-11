<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Issued when exception was thrown and unhandled.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ExceptionThrownEvent implements \JsonSerializable
{
	/**
	 * Timestamp of the exception.
	 *
	 * @var int|float
	 */
	public $timestamp;

	/** @var ExceptionDetails */
	public $exceptionDetails;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		if (isset($data->exceptionDetails)) {
			$instance->exceptionDetails = ExceptionDetails::fromJson($data->exceptionDetails);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		if ($this->exceptionDetails !== null) {
			$data->exceptionDetails = $this->exceptionDetails->jsonSerialize();
		}
		return $data;
	}
}
