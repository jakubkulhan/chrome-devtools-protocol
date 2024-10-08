<?php

namespace ChromeDevtoolsProtocol\Model\CacheStorage;

/**
 * Data entry.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DataEntry implements \JsonSerializable
{
	/**
	 * Request URL.
	 *
	 * @var string
	 */
	public $requestURL;

	/**
	 * Request method.
	 *
	 * @var string
	 */
	public $requestMethod;

	/**
	 * Request headers
	 *
	 * @var Header[]
	 */
	public $requestHeaders;

	/**
	 * Number of seconds since epoch.
	 *
	 * @var int|float
	 */
	public $responseTime;

	/**
	 * HTTP response status code.
	 *
	 * @var int
	 */
	public $responseStatus;

	/**
	 * HTTP response status text.
	 *
	 * @var string
	 */
	public $responseStatusText;

	/**
	 * HTTP response type
	 *
	 * @var string
	 */
	public $responseType;

	/**
	 * Response headers
	 *
	 * @var Header[]
	 */
	public $responseHeaders;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestURL)) {
			$instance->requestURL = (string)$data->requestURL;
		}
		if (isset($data->requestMethod)) {
			$instance->requestMethod = (string)$data->requestMethod;
		}
		if (isset($data->requestHeaders)) {
			$instance->requestHeaders = [];
			foreach ($data->requestHeaders as $item) {
				$instance->requestHeaders[] = Header::fromJson($item);
			}
		}
		if (isset($data->responseTime)) {
			$instance->responseTime = $data->responseTime;
		}
		if (isset($data->responseStatus)) {
			$instance->responseStatus = (int)$data->responseStatus;
		}
		if (isset($data->responseStatusText)) {
			$instance->responseStatusText = (string)$data->responseStatusText;
		}
		if (isset($data->responseType)) {
			$instance->responseType = (string)$data->responseType;
		}
		if (isset($data->responseHeaders)) {
			$instance->responseHeaders = [];
			foreach ($data->responseHeaders as $item) {
				$instance->responseHeaders[] = Header::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestURL !== null) {
			$data->requestURL = $this->requestURL;
		}
		if ($this->requestMethod !== null) {
			$data->requestMethod = $this->requestMethod;
		}
		if ($this->requestHeaders !== null) {
			$data->requestHeaders = [];
			foreach ($this->requestHeaders as $item) {
				$data->requestHeaders[] = $item->jsonSerialize();
			}
		}
		if ($this->responseTime !== null) {
			$data->responseTime = $this->responseTime;
		}
		if ($this->responseStatus !== null) {
			$data->responseStatus = $this->responseStatus;
		}
		if ($this->responseStatusText !== null) {
			$data->responseStatusText = $this->responseStatusText;
		}
		if ($this->responseType !== null) {
			$data->responseType = $this->responseType;
		}
		if ($this->responseHeaders !== null) {
			$data->responseHeaders = [];
			foreach ($this->responseHeaders as $item) {
				$data->responseHeaders[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
