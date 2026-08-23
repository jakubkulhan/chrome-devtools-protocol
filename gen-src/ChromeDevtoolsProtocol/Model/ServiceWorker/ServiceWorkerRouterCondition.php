<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

/**
 * Mostly corresponds to `RouterCondition` in ServiceWorker spec (https://www.w3.org/TR/service-workers/#dictdef-routercondition) while this currently lacks support for the nested conditions ("or" and "not"). TODO(crbug.com/540469610): Support recursive conditions.
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
		return $data;
	}
}
