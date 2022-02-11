<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired when HTTP request has failed to load.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LoadingFailedEvent implements \JsonSerializable
{
	/**
	 * Request identifier.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * Timestamp.
	 *
	 * @var int|float
	 */
	public $timestamp;

	/**
	 * Resource type.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * User friendly error message.
	 *
	 * @var string
	 */
	public $errorText;

	/**
	 * True if loading was canceled.
	 *
	 * @var bool|null
	 */
	public $canceled;

	/**
	 * The reason why loading was blocked, if any.
	 *
	 * @var string
	 */
	public $blockedReason;

	/**
	 * The reason why loading was blocked by CORS, if any.
	 *
	 * @var CorsErrorStatus|null
	 */
	public $corsErrorStatus;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->errorText)) {
			$instance->errorText = (string)$data->errorText;
		}
		if (isset($data->canceled)) {
			$instance->canceled = (bool)$data->canceled;
		}
		if (isset($data->blockedReason)) {
			$instance->blockedReason = (string)$data->blockedReason;
		}
		if (isset($data->corsErrorStatus)) {
			$instance->corsErrorStatus = CorsErrorStatus::fromJson($data->corsErrorStatus);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->errorText !== null) {
			$data->errorText = $this->errorText;
		}
		if ($this->canceled !== null) {
			$data->canceled = $this->canceled;
		}
		if ($this->blockedReason !== null) {
			$data->blockedReason = $this->blockedReason;
		}
		if ($this->corsErrorStatus !== null) {
			$data->corsErrorStatus = $this->corsErrorStatus->jsonSerialize();
		}
		return $data;
	}
}
