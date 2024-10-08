<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

/**
 * ServiceWorker error message.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ServiceWorkerErrorMessage implements \JsonSerializable
{
	/** @var string */
	public $errorMessage;

	/** @var string */
	public $registrationId;

	/** @var string */
	public $versionId;

	/** @var string */
	public $sourceURL;

	/** @var int */
	public $lineNumber;

	/** @var int */
	public $columnNumber;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->errorMessage)) {
			$instance->errorMessage = (string)$data->errorMessage;
		}
		if (isset($data->registrationId)) {
			$instance->registrationId = (string)$data->registrationId;
		}
		if (isset($data->versionId)) {
			$instance->versionId = (string)$data->versionId;
		}
		if (isset($data->sourceURL)) {
			$instance->sourceURL = (string)$data->sourceURL;
		}
		if (isset($data->lineNumber)) {
			$instance->lineNumber = (int)$data->lineNumber;
		}
		if (isset($data->columnNumber)) {
			$instance->columnNumber = (int)$data->columnNumber;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->errorMessage !== null) {
			$data->errorMessage = $this->errorMessage;
		}
		if ($this->registrationId !== null) {
			$data->registrationId = $this->registrationId;
		}
		if ($this->versionId !== null) {
			$data->versionId = $this->versionId;
		}
		if ($this->sourceURL !== null) {
			$data->sourceURL = $this->sourceURL;
		}
		if ($this->lineNumber !== null) {
			$data->lineNumber = $this->lineNumber;
		}
		if ($this->columnNumber !== null) {
			$data->columnNumber = $this->columnNumber;
		}
		return $data;
	}
}
