<?php

namespace ChromeDevtoolsProtocol\Model\Fetch;

/**
 * Request for Fetch.continueResponse command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ContinueResponseRequest implements \JsonSerializable
{
	/**
	 * An id the client received in requestPaused event.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * An HTTP response code. If absent, original response code will be used.
	 *
	 * @var int|null
	 */
	public $responseCode;

	/**
	 * A textual representation of responseCode. If absent, a standard phrase matching responseCode is used.
	 *
	 * @var string|null
	 */
	public $responsePhrase;

	/**
	 * Response headers. If absent, original response headers will be used.
	 *
	 * @var HeaderEntry[]|null
	 */
	public $responseHeaders;

	/**
	 * Alternative way of specifying response headers as a \0-separated series of name: value pairs. Prefer the above method unless you need to represent some non-UTF8 values that can't be transmitted over the protocol as text. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string|null
	 */
	public $binaryResponseHeaders;


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
		if (isset($data->responseCode)) {
			$instance->responseCode = (int)$data->responseCode;
		}
		if (isset($data->responsePhrase)) {
			$instance->responsePhrase = (string)$data->responsePhrase;
		}
		if (isset($data->responseHeaders)) {
			$instance->responseHeaders = [];
			foreach ($data->responseHeaders as $item) {
				$instance->responseHeaders[] = HeaderEntry::fromJson($item);
			}
		}
		if (isset($data->binaryResponseHeaders)) {
			$instance->binaryResponseHeaders = (string)$data->binaryResponseHeaders;
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
		if ($this->responsePhrase !== null) {
			$data->responsePhrase = $this->responsePhrase;
		}
		if ($this->responseHeaders !== null) {
			$data->responseHeaders = [];
			foreach ($this->responseHeaders as $item) {
				$data->responseHeaders[] = $item->jsonSerialize();
			}
		}
		if ($this->binaryResponseHeaders !== null) {
			$data->binaryResponseHeaders = $this->binaryResponseHeaders;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ContinueResponseRequestBuilder
	 */
	public static function builder(): ContinueResponseRequestBuilder
	{
		return new ContinueResponseRequestBuilder();
	}
}
