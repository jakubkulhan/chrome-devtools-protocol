<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Issued when unhandled exception was revoked.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ExceptionRevokedEvent implements \JsonSerializable
{
	/**
	 * Reason describing why exception was revoked.
	 *
	 * @var string
	 */
	public $reason;

	/**
	 * The id of revoked exception, as reported in `exceptionThrown`.
	 *
	 * @var int
	 */
	public $exceptionId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->reason)) {
			$instance->reason = (string)$data->reason;
		}
		if (isset($data->exceptionId)) {
			$instance->exceptionId = (int)$data->exceptionId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->reason !== null) {
			$data->reason = $this->reason;
		}
		if ($this->exceptionId !== null) {
			$data->exceptionId = $this->exceptionId;
		}
		return $data;
	}
}
