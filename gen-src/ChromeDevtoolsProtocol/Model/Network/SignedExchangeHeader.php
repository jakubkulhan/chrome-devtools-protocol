<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Information about a signed exchange header. https://wicg.github.io/webpackage/draft-yasskin-httpbis-origin-signed-exchanges-impl.html#cbor-representation
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SignedExchangeHeader implements \JsonSerializable
{
	/**
	 * Signed exchange request URL.
	 *
	 * @var string
	 */
	public $requestUrl;

	/**
	 * Signed exchange response code.
	 *
	 * @var int
	 */
	public $responseCode;

	/**
	 * Signed exchange response headers.
	 *
	 * @var Headers
	 */
	public $responseHeaders;

	/**
	 * Signed exchange response signature.
	 *
	 * @var SignedExchangeSignature[]
	 */
	public $signatures;

	/**
	 * Signed exchange header integrity hash in the form of "sha256-<base64-hash-value>".
	 *
	 * @var string
	 */
	public $headerIntegrity;


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
		if (isset($data->responseCode)) {
			$instance->responseCode = (int)$data->responseCode;
		}
		if (isset($data->responseHeaders)) {
			$instance->responseHeaders = Headers::fromJson($data->responseHeaders);
		}
		if (isset($data->signatures)) {
			$instance->signatures = [];
			foreach ($data->signatures as $item) {
				$instance->signatures[] = SignedExchangeSignature::fromJson($item);
			}
		}
		if (isset($data->headerIntegrity)) {
			$instance->headerIntegrity = (string)$data->headerIntegrity;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestUrl !== null) {
			$data->requestUrl = $this->requestUrl;
		}
		if ($this->responseCode !== null) {
			$data->responseCode = $this->responseCode;
		}
		if ($this->responseHeaders !== null) {
			$data->responseHeaders = $this->responseHeaders->jsonSerialize();
		}
		if ($this->signatures !== null) {
			$data->signatures = [];
			foreach ($this->signatures as $item) {
				$data->signatures[] = $item->jsonSerialize();
			}
		}
		if ($this->headerIntegrity !== null) {
			$data->headerIntegrity = $this->headerIntegrity;
		}
		return $data;
	}
}
