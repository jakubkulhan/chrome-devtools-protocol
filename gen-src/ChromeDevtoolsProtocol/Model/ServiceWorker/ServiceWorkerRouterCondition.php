<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

/**
 * Mostly corresponds to `RouterCondition` in ServiceWorker spec (https://www.w3.org/TR/service-workers/#dictdef-routercondition)
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ServiceWorkerRouterCondition implements \JsonSerializable
{
	/**
	 * Plain text, or JSON serialization of URLPatternInit or URLPattern
	 *
	 * @var string|null
	 */
	public $urlPattern;

	/** @var string|null */
	public $requestMethod;

	/** @var string|null */
	public $requestMode;

	/** @var string|null */
	public $requestDestination;

	/** @var string */
	public $runningStatus;

	/** @var ServiceWorkerRouterCondition[]|null */
	public $or;

	/** @var ServiceWorkerRouterCondition|null */
	public $not;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->urlPattern)) {
			$instance->urlPattern = (string)$data->urlPattern;
		}
		if (isset($data->requestMethod)) {
			$instance->requestMethod = (string)$data->requestMethod;
		}
		if (isset($data->requestMode)) {
			$instance->requestMode = (string)$data->requestMode;
		}
		if (isset($data->requestDestination)) {
			$instance->requestDestination = (string)$data->requestDestination;
		}
		if (isset($data->runningStatus)) {
			$instance->runningStatus = (string)$data->runningStatus;
		}
		if (isset($data->or)) {
			$instance->or = [];
			foreach ($data->or as $item) {
				$instance->or[] = ServiceWorkerRouterCondition::fromJson($item);
			}
		}
		if (isset($data->not)) {
			$instance->not = ServiceWorkerRouterCondition::fromJson($data->not);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->urlPattern !== null) {
			$data->urlPattern = $this->urlPattern;
		}
		if ($this->requestMethod !== null) {
			$data->requestMethod = $this->requestMethod;
		}
		if ($this->requestMode !== null) {
			$data->requestMode = $this->requestMode;
		}
		if ($this->requestDestination !== null) {
			$data->requestDestination = $this->requestDestination;
		}
		if ($this->runningStatus !== null) {
			$data->runningStatus = $this->runningStatus;
		}
		if ($this->or !== null) {
			$data->or = [];
			foreach ($this->or as $item) {
				$data->or[] = $item->jsonSerialize();
			}
		}
		if ($this->not !== null) {
			$data->not = $this->not->jsonSerialize();
		}
		return $data;
	}
}
