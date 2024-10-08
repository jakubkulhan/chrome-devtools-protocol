<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * WebSocket request data.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class WebSocketRequest implements \JsonSerializable
{
	/**
	 * HTTP request headers.
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
		if (isset($data->headers)) {
			$instance->headers = Headers::fromJson($data->headers);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->headers !== null) {
			$data->headers = $this->headers->jsonSerialize();
		}
		return $data;
	}
}
