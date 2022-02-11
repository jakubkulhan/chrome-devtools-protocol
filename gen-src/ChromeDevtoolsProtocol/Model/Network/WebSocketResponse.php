<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * WebSocket response data.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WebSocketResponse implements \JsonSerializable
{
	/**
	 * HTTP response status code.
	 *
	 * @var int
	 */
	public $status;

	/**
	 * HTTP response status text.
	 *
	 * @var string
	 */
	public $statusText;

	/**
	 * HTTP response headers.
	 *
	 * @var Headers
	 */
	public $headers;

	/**
	 * HTTP response headers text.
	 *
	 * @var string|null
	 */
	public $headersText;

	/**
	 * HTTP request headers.
	 *
	 * @var Headers|null
	 */
	public $requestHeaders;

	/**
	 * HTTP request headers text.
	 *
	 * @var string|null
	 */
	public $requestHeadersText;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->status)) {
			$instance->status = (int)$data->status;
		}
		if (isset($data->statusText)) {
			$instance->statusText = (string)$data->statusText;
		}
		if (isset($data->headers)) {
			$instance->headers = Headers::fromJson($data->headers);
		}
		if (isset($data->headersText)) {
			$instance->headersText = (string)$data->headersText;
		}
		if (isset($data->requestHeaders)) {
			$instance->requestHeaders = Headers::fromJson($data->requestHeaders);
		}
		if (isset($data->requestHeadersText)) {
			$instance->requestHeadersText = (string)$data->requestHeadersText;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->status !== null) {
			$data->status = $this->status;
		}
		if ($this->statusText !== null) {
			$data->statusText = $this->statusText;
		}
		if ($this->headers !== null) {
			$data->headers = $this->headers->jsonSerialize();
		}
		if ($this->headersText !== null) {
			$data->headersText = $this->headersText;
		}
		if ($this->requestHeaders !== null) {
			$data->requestHeaders = $this->requestHeaders->jsonSerialize();
		}
		if ($this->requestHeadersText !== null) {
			$data->requestHeadersText = $this->requestHeadersText;
		}
		return $data;
	}
}
