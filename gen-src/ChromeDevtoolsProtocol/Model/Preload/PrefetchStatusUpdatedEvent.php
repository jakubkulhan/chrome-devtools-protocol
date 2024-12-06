<?php

namespace ChromeDevtoolsProtocol\Model\Preload;

/**
 * Fired when a prefetch attempt is updated.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PrefetchStatusUpdatedEvent implements \JsonSerializable
{
	/** @var PreloadingAttemptKey */
	public $key;

	/** @var string */
	public $pipelineId;

	/**
	 * The frame id of the frame initiating prefetch.
	 *
	 * @var string
	 */
	public $initiatingFrameId;

	/** @var string */
	public $prefetchUrl;

	/** @var string */
	public $status;

	/** @var string */
	public $prefetchStatus;

	/** @var string */
	public $requestId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->key)) {
			$instance->key = PreloadingAttemptKey::fromJson($data->key);
		}
		if (isset($data->pipelineId)) {
			$instance->pipelineId = (string)$data->pipelineId;
		}
		if (isset($data->initiatingFrameId)) {
			$instance->initiatingFrameId = (string)$data->initiatingFrameId;
		}
		if (isset($data->prefetchUrl)) {
			$instance->prefetchUrl = (string)$data->prefetchUrl;
		}
		if (isset($data->status)) {
			$instance->status = (string)$data->status;
		}
		if (isset($data->prefetchStatus)) {
			$instance->prefetchStatus = (string)$data->prefetchStatus;
		}
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->key !== null) {
			$data->key = $this->key->jsonSerialize();
		}
		if ($this->pipelineId !== null) {
			$data->pipelineId = $this->pipelineId;
		}
		if ($this->initiatingFrameId !== null) {
			$data->initiatingFrameId = $this->initiatingFrameId;
		}
		if ($this->prefetchUrl !== null) {
			$data->prefetchUrl = $this->prefetchUrl;
		}
		if ($this->status !== null) {
			$data->status = $this->status;
		}
		if ($this->prefetchStatus !== null) {
			$data->prefetchStatus = $this->prefetchStatus;
		}
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		return $data;
	}
}
