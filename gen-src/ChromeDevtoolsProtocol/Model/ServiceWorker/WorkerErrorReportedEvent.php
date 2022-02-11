<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

/**
 * Named type ServiceWorker.WorkerErrorReportedEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WorkerErrorReportedEvent implements \JsonSerializable
{
	/** @var ServiceWorkerErrorMessage */
	public $errorMessage;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->errorMessage)) {
			$instance->errorMessage = ServiceWorkerErrorMessage::fromJson($data->errorMessage);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->errorMessage !== null) {
			$data->errorMessage = $this->errorMessage->jsonSerialize();
		}
		return $data;
	}
}
