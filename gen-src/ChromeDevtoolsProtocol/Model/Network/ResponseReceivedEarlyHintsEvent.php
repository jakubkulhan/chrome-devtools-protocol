<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired when 103 Early Hints headers is received in addition to the common response. Not every responseReceived event will have an responseReceivedEarlyHints fired. Only one responseReceivedEarlyHints may be fired for eached responseReceived event.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ResponseReceivedEarlyHintsEvent implements \JsonSerializable
{
	/**
	 * Request identifier. Used to match this information to another responseReceived event.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * Raw response headers as they were received over the wire. Duplicate headers in the response are represented as a single key with their values concatentated using `\n` as the separator. See also `headersText` that contains verbatim text for HTTP/1.*.
	 *
	 * @var Headers
	 */
	public $headers;


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
		if (isset($data->headers)) {
			$instance->headers = Headers::fromJson($data->headers);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->headers !== null) {
			$data->headers = $this->headers->jsonSerialize();
		}
		return $data;
	}
}
