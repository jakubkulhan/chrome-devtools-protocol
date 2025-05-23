<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * A shared storage run or selectURL operation finished its execution. The following parameters are included in all events.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SharedStorageWorkletOperationExecutionFinishedEvent implements \JsonSerializable
{
	/**
	 * Time that the operation finished.
	 *
	 * @var int|float
	 */
	public $finishedTime;

	/**
	 * Time, in microseconds, from start of shared storage JS API call until end of operation execution in the worklet.
	 *
	 * @var int
	 */
	public $executionTime;

	/**
	 * Enum value indicating the Shared Storage API method invoked.
	 *
	 * @var string
	 */
	public $method;

	/**
	 * ID of the operation call.
	 *
	 * @var string
	 */
	public $operationId;

	/**
	 * Hex representation of the DevTools token used as the TargetID for the associated shared storage worklet.
	 *
	 * @var string
	 */
	public $workletTargetId;

	/**
	 * DevTools Frame Token for the primary frame tree's root.
	 *
	 * @var string
	 */
	public $mainFrameId;

	/**
	 * Serialization of the origin owning the Shared Storage data.
	 *
	 * @var string
	 */
	public $ownerOrigin;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->finishedTime)) {
			$instance->finishedTime = $data->finishedTime;
		}
		if (isset($data->executionTime)) {
			$instance->executionTime = (int)$data->executionTime;
		}
		if (isset($data->method)) {
			$instance->method = (string)$data->method;
		}
		if (isset($data->operationId)) {
			$instance->operationId = (string)$data->operationId;
		}
		if (isset($data->workletTargetId)) {
			$instance->workletTargetId = (string)$data->workletTargetId;
		}
		if (isset($data->mainFrameId)) {
			$instance->mainFrameId = (string)$data->mainFrameId;
		}
		if (isset($data->ownerOrigin)) {
			$instance->ownerOrigin = (string)$data->ownerOrigin;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->finishedTime !== null) {
			$data->finishedTime = $this->finishedTime;
		}
		if ($this->executionTime !== null) {
			$data->executionTime = $this->executionTime;
		}
		if ($this->method !== null) {
			$data->method = $this->method;
		}
		if ($this->operationId !== null) {
			$data->operationId = $this->operationId;
		}
		if ($this->workletTargetId !== null) {
			$data->workletTargetId = $this->workletTargetId;
		}
		if ($this->mainFrameId !== null) {
			$data->mainFrameId = $this->mainFrameId;
		}
		if ($this->ownerOrigin !== null) {
			$data->ownerOrigin = $this->ownerOrigin;
		}
		return $data;
	}
}
