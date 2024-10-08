<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Issued when a target has crashed.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TargetCrashedEvent implements \JsonSerializable
{
	/** @var string */
	public $targetId;

	/**
	 * Termination status type.
	 *
	 * @var string
	 */
	public $status;

	/**
	 * Termination error code.
	 *
	 * @var int
	 */
	public $errorCode;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->targetId)) {
			$instance->targetId = (string)$data->targetId;
		}
		if (isset($data->status)) {
			$instance->status = (string)$data->status;
		}
		if (isset($data->errorCode)) {
			$instance->errorCode = (int)$data->errorCode;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->targetId !== null) {
			$data->targetId = $this->targetId;
		}
		if ($this->status !== null) {
			$data->status = $this->status;
		}
		if ($this->errorCode !== null) {
			$data->errorCode = $this->errorCode;
		}
		return $data;
	}
}
