<?php

namespace ChromeDevtoolsProtocol\Model\Fetch;

/**
 * Request for Fetch.failRequest command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FailRequestRequest implements \JsonSerializable
{
	/**
	 * An id the client received in requestPaused event.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * Causes the request to fail with the given reason.
	 *
	 * @var string
	 */
	public $errorReason;


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
		if (isset($data->errorReason)) {
			$instance->errorReason = (string)$data->errorReason;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->errorReason !== null) {
			$data->errorReason = $this->errorReason;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return FailRequestRequestBuilder
	 */
	public static function builder(): FailRequestRequestBuilder
	{
		return new FailRequestRequestBuilder();
	}
}
