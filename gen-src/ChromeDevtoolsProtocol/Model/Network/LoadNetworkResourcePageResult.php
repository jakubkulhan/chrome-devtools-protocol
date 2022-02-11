<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * An object providing the result of a network resource load.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LoadNetworkResourcePageResult implements \JsonSerializable
{
	/** @var bool */
	public $success;

	/**
	 * Optional values used for error reporting.
	 *
	 * @var int|float|null
	 */
	public $netError;

	/** @var string|null */
	public $netErrorName;

	/** @var int|float|null */
	public $httpStatusCode;

	/**
	 * If successful, one of the following two fields holds the result.
	 *
	 * @var string
	 */
	public $stream;

	/**
	 * Response headers.
	 *
	 * @var Headers|null
	 */
	public $headers;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->success)) {
			$instance->success = (bool)$data->success;
		}
		if (isset($data->netError)) {
			$instance->netError = $data->netError;
		}
		if (isset($data->netErrorName)) {
			$instance->netErrorName = (string)$data->netErrorName;
		}
		if (isset($data->httpStatusCode)) {
			$instance->httpStatusCode = $data->httpStatusCode;
		}
		if (isset($data->stream)) {
			$instance->stream = (string)$data->stream;
		}
		if (isset($data->headers)) {
			$instance->headers = Headers::fromJson($data->headers);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->success !== null) {
			$data->success = $this->success;
		}
		if ($this->netError !== null) {
			$data->netError = $this->netError;
		}
		if ($this->netErrorName !== null) {
			$data->netErrorName = $this->netErrorName;
		}
		if ($this->httpStatusCode !== null) {
			$data->httpStatusCode = $this->httpStatusCode;
		}
		if ($this->stream !== null) {
			$data->stream = $this->stream;
		}
		if ($this->headers !== null) {
			$data->headers = $this->headers->jsonSerialize();
		}
		return $data;
	}
}
