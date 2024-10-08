<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

/**
 * Named type ServiceWorker.WorkerRegistrationUpdatedEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WorkerRegistrationUpdatedEvent implements \JsonSerializable
{
	/** @var ServiceWorkerRegistration[] */
	public $registrations;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->registrations)) {
			$instance->registrations = [];
			foreach ($data->registrations as $item) {
				$instance->registrations[] = ServiceWorkerRegistration::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->registrations !== null) {
			$data->registrations = [];
			foreach ($this->registrations as $item) {
				$data->registrations[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
