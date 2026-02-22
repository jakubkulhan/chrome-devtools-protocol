<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Details about a failed device bound session network request.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeviceBoundSessionFailedRequest implements \JsonSerializable
{
	/**
	 * The failed request URL.
	 *
	 * @var string
	 */
	public $requestUrl;

	/**
	 * The net error of the response if it was not OK.
	 *
	 * @var string|null
	 */
	public $netError;

	/**
	 * The response code if the net error was OK and the response code was not 200.
	 *
	 * @var int|null
	 */
	public $responseError;

	/**
	 * The body of the response if the net error was OK, the response code was not 200, and the response body was not empty.
	 *
	 * @var string|null
	 */
	public $responseErrorBody;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestUrl)) {
			$instance->requestUrl = (string)$data->requestUrl;
		}
		if (isset($data->netError)) {
			$instance->netError = (string)$data->netError;
		}
		if (isset($data->responseError)) {
			$instance->responseError = (int)$data->responseError;
		}
		if (isset($data->responseErrorBody)) {
			$instance->responseErrorBody = (string)$data->responseErrorBody;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestUrl !== null) {
			$data->requestUrl = $this->requestUrl;
		}
		if ($this->netError !== null) {
			$data->netError = $this->netError;
		}
		if ($this->responseError !== null) {
			$data->responseError = $this->responseError;
		}
		if ($this->responseErrorBody !== null) {
			$data->responseErrorBody = $this->responseErrorBody;
		}
		return $data;
	}
}
