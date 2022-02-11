<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

/**
 * ServiceWorker version.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ServiceWorkerVersion implements \JsonSerializable
{
	/** @var string */
	public $versionId;

	/** @var string */
	public $registrationId;

	/** @var string */
	public $scriptURL;

	/** @var string */
	public $runningStatus;

	/** @var string */
	public $status;

	/**
	 * The Last-Modified header value of the main script.
	 *
	 * @var int|float|null
	 */
	public $scriptLastModified;

	/**
	 * The time at which the response headers of the main script were received from the server. For cached script it is the last time the cache entry was validated.
	 *
	 * @var int|float|null
	 */
	public $scriptResponseTime;

	/** @var string[]|null */
	public $controlledClients;

	/** @var string */
	public $targetId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->versionId)) {
			$instance->versionId = (string)$data->versionId;
		}
		if (isset($data->registrationId)) {
			$instance->registrationId = (string)$data->registrationId;
		}
		if (isset($data->scriptURL)) {
			$instance->scriptURL = (string)$data->scriptURL;
		}
		if (isset($data->runningStatus)) {
			$instance->runningStatus = (string)$data->runningStatus;
		}
		if (isset($data->status)) {
			$instance->status = (string)$data->status;
		}
		if (isset($data->scriptLastModified)) {
			$instance->scriptLastModified = $data->scriptLastModified;
		}
		if (isset($data->scriptResponseTime)) {
			$instance->scriptResponseTime = $data->scriptResponseTime;
		}
		if (isset($data->controlledClients)) {
			$instance->controlledClients = [];
		if (isset($data->controlledClients)) {
			$instance->controlledClients = [];
			foreach ($data->controlledClients as $item) {
				$instance->controlledClients[] = (string)$item;
			}
		}
		}
		if (isset($data->targetId)) {
			$instance->targetId = (string)$data->targetId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->versionId !== null) {
			$data->versionId = $this->versionId;
		}
		if ($this->registrationId !== null) {
			$data->registrationId = $this->registrationId;
		}
		if ($this->scriptURL !== null) {
			$data->scriptURL = $this->scriptURL;
		}
		if ($this->runningStatus !== null) {
			$data->runningStatus = $this->runningStatus;
		}
		if ($this->status !== null) {
			$data->status = $this->status;
		}
		if ($this->scriptLastModified !== null) {
			$data->scriptLastModified = $this->scriptLastModified;
		}
		if ($this->scriptResponseTime !== null) {
			$data->scriptResponseTime = $this->scriptResponseTime;
		}
		if ($this->controlledClients !== null) {
			$data->controlledClients = [];
		if ($this->controlledClients !== null) {
			$data->controlledClients = [];
			foreach ($this->controlledClients as $item) {
				$data->controlledClients[] = $item;
			}
		}
		}
		if ($this->targetId !== null) {
			$data->targetId = $this->targetId;
		}
		return $data;
	}
}
