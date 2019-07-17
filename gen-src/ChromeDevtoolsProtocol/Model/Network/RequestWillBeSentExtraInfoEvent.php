<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Fired when additional information about a requestWillBeSent event is available from the network stack. Not every requestWillBeSent event will have an additional requestWillBeSentExtraInfo fired for it, and there is no guarantee whether requestWillBeSent or requestWillBeSentExtraInfo will be fired first for the same request.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestWillBeSentExtraInfoEvent implements \JsonSerializable
{
	/**
	 * Request identifier. Used to match this information to an existing requestWillBeSent event.
	 *
	 * @var string
	 */
	public $requestId;

	/**
	 * A list of cookies which will not be sent with this request along with corresponding reasons for blocking.
	 *
	 * @var BlockedCookieWithReason[]
	 */
	public $blockedCookies;

	/**
	 * Raw request headers as they will be sent over the wire.
	 *
	 * @var Headers
	 */
	public $headers;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		if (isset($data->blockedCookies)) {
			$instance->blockedCookies = [];
			foreach ($data->blockedCookies as $item) {
				$instance->blockedCookies[] = BlockedCookieWithReason::fromJson($item);
			}
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
		if ($this->blockedCookies !== null) {
			$data->blockedCookies = [];
			foreach ($this->blockedCookies as $item) {
				$data->blockedCookies[] = $item->jsonSerialize();
			}
		}
		if ($this->headers !== null) {
			$data->headers = $this->headers->jsonSerialize();
		}
		return $data;
	}
}
