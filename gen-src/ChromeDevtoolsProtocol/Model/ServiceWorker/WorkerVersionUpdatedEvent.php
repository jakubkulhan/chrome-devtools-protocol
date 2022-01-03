<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

/**
 * Named type ServiceWorker.WorkerVersionUpdatedEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WorkerVersionUpdatedEvent implements \JsonSerializable
{
	/** @var ServiceWorkerVersion[] */
	public $versions;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->versions)) {
			$instance->versions = [];
			foreach ($data->versions as $item) {
				$instance->versions[] = ServiceWorkerVersion::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->versions !== null) {
			$data->versions = [];
			foreach ($this->versions as $item) {
				$data->versions[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
