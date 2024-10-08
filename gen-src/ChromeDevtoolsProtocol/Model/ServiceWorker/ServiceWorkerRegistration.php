<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

/**
 * ServiceWorker registration.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ServiceWorkerRegistration implements \JsonSerializable
{
	/** @var string */
	public $registrationId;

	/** @var string */
	public $scopeURL;

	/** @var bool */
	public $isDeleted;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->registrationId)) {
			$instance->registrationId = (string)$data->registrationId;
		}
		if (isset($data->scopeURL)) {
			$instance->scopeURL = (string)$data->scopeURL;
		}
		if (isset($data->isDeleted)) {
			$instance->isDeleted = (bool)$data->isDeleted;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->registrationId !== null) {
			$data->registrationId = $this->registrationId;
		}
		if ($this->scopeURL !== null) {
			$data->scopeURL = $this->scopeURL;
		}
		if ($this->isDeleted !== null) {
			$data->isDeleted = $this->isDeleted;
		}
		return $data;
	}
}
