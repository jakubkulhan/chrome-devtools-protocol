<?php

namespace ChromeDevtoolsProtocol\Model\Fetch;

/**
 * Request for Fetch.continueRequest command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ContinueRequestRequest implements \JsonSerializable
{
	/**
	 * An id the client received in requestPaused event.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * If set, the request url will be modified in a way that's not observable by page.
	 *
	 * @var string|null
	 */
	public $url;

	/**
	 * If set, the request method is overridden.
	 *
	 * @var string|null
	 */
	public $method;

	/**
	 * If set, overrides the post data in the request. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string|null
	 */
	public $postData;

	/**
	 * If set, overrides the request headers. Note that the overrides do not extend to subsequent redirect hops, if a redirect happens. Another override may be applied to a different request produced by a redirect.
	 *
	 * @var HeaderEntry[]|null
	 */
	public $headers;

	/**
	 * If set, overrides response interception behavior for this request.
	 *
	 * @var bool|null
	 */
	public $interceptResponse;


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
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->method)) {
			$instance->method = (string)$data->method;
		}
		if (isset($data->postData)) {
			$instance->postData = (string)$data->postData;
		}
		if (isset($data->headers)) {
			$instance->headers = [];
			foreach ($data->headers as $item) {
				$instance->headers[] = HeaderEntry::fromJson($item);
			}
		}
		if (isset($data->interceptResponse)) {
			$instance->interceptResponse = (bool)$data->interceptResponse;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->method !== null) {
			$data->method = $this->method;
		}
		if ($this->postData !== null) {
			$data->postData = $this->postData;
		}
		if ($this->headers !== null) {
			$data->headers = [];
			foreach ($this->headers as $item) {
				$data->headers[] = $item->jsonSerialize();
			}
		}
		if ($this->interceptResponse !== null) {
			$data->interceptResponse = $this->interceptResponse;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ContinueRequestRequestBuilder
	 */
	public static function builder(): ContinueRequestRequestBuilder
	{
		return new ContinueRequestRequestBuilder();
	}
}
