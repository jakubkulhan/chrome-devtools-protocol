<?php

namespace ChromeDevtoolsProtocol\Model\Fetch;

/**
 * Request for Fetch.fulfillRequest command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FulfillRequestRequest implements \JsonSerializable
{
	/**
	 * An id the client received in requestPaused event.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * An HTTP response code.
	 *
	 * @var int
	 */
	public $responseCode;

	/**
	 * Response headers.
	 *
	 * @var HeaderEntry[]
	 */
	public $responseHeaders;

	/**
	 * A response body.
	 *
	 * @var string|null
	 */
	public $body;

	/**
	 * A textual representation of responseCode. If absent, a standard phrase mathcing responseCode is used.
	 *
	 * @var string|null
	 */
	public $responsePhrase;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		if (isset($data->responseCode)) {
			$instance->responseCode = (int)$data->responseCode;
		}
		if (isset($data->responseHeaders)) {
			$instance->responseHeaders = [];
			foreach ($data->responseHeaders as $item) {
				$instance->responseHeaders[] = HeaderEntry::fromJson($item);
			}
		}
		if (isset($data->body)) {
			$instance->body = (string)$data->body;
		}
		if (isset($data->responsePhrase)) {
			$instance->responsePhrase = (string)$data->responsePhrase;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->responseCode !== null) {
			$data->responseCode = $this->responseCode;
		}
		if ($this->responseHeaders !== null) {
			$data->responseHeaders = [];
			foreach ($this->responseHeaders as $item) {
				$data->responseHeaders[] = $item->jsonSerialize();
			}
		}
		if ($this->body !== null) {
			$data->body = $this->body;
		}
		if ($this->responsePhrase !== null) {
			$data->responsePhrase = $this->responsePhrase;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return FulfillRequestRequestBuilder
	 */
	public static function builder(): FulfillRequestRequestBuilder
	{
		return new FulfillRequestRequestBuilder();
	}
}
