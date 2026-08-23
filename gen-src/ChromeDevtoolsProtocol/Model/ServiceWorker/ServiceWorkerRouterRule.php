<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

/**
 * Named type ServiceWorker.ServiceWorkerRouterRule.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ServiceWorkerRouterRule implements \JsonSerializable
{
	/** @var ServiceWorkerRouterCondition */
	public $condition;

	/** @var ServiceWorkerRouterSource */
	public $source;

	/**
	 * Rule ID assigned by the browser. Unique within each ServiceWorkerVersion.
	 *
	 * @var int
	 */
	public $id;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->condition)) {
			$instance->condition = ServiceWorkerRouterCondition::fromJson($data->condition);
		}
		if (isset($data->source)) {
			$instance->source = ServiceWorkerRouterSource::fromJson($data->source);
		}
		if (isset($data->id)) {
			$instance->id = (int)$data->id;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->condition !== null) {
			$data->condition = $this->condition->jsonSerialize();
		}
		if ($this->source !== null) {
			$data->source = $this->source->jsonSerialize();
		}
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		return $data;
	}
}
