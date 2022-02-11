<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Response to Audits.getEncodedResponse command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetEncodedResponseResponse implements \JsonSerializable
{
	/**
	 * The encoded body as a base64 string. Omitted if sizeOnly is true. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string|null
	 */
	public $body;

	/**
	 * Size before re-encoding.
	 *
	 * @var int
	 */
	public $originalSize;

	/**
	 * Size after re-encoding.
	 *
	 * @var int
	 */
	public $encodedSize;


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
		if (isset($data->originalSize)) {
			$instance->originalSize = (int)$data->originalSize;
		}
		if (isset($data->encodedSize)) {
			$instance->encodedSize = (int)$data->encodedSize;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->body !== null) {
			$data->body = $this->body;
		}
		if ($this->originalSize !== null) {
			$data->originalSize = $this->originalSize;
		}
		if ($this->encodedSize !== null) {
			$data->encodedSize = $this->encodedSize;
		}
		return $data;
	}
}
