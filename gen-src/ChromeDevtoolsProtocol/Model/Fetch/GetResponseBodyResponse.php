<?php

namespace ChromeDevtoolsProtocol\Model\Fetch;

/**
 * Response to Fetch.getResponseBody command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetResponseBodyResponse implements \JsonSerializable
{
	/**
	 * Response body.
	 *
	 * @var string
	 */
	public $body;

	/**
	 * True, if content was sent as base64.
	 *
	 * @var bool
	 */
	public $base64Encoded;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->body)) {
			$instance->body = (string)$data->body;
		}
		if (isset($data->base64Encoded)) {
			$instance->base64Encoded = (bool)$data->base64Encoded;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->body !== null) {
			$data->body = $this->body;
		}
		if ($this->base64Encoded !== null) {
			$data->base64Encoded = $this->base64Encoded;
		}
		return $data;
	}
}
