<?php

namespace ChromeDevtoolsProtocol\Model\IO;

/**
 * Response to IO.read command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReadResponse implements \JsonSerializable
{
	/**
	 * Set if the data is base64-encoded
	 *
	 * @var bool|null
	 */
	public $base64Encoded;

	/**
	 * Data that were read.
	 *
	 * @var string
	 */
	public $data;

	/**
	 * Set if the end-of-file condition occurred while reading.
	 *
	 * @var bool
	 */
	public $eof;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->base64Encoded)) {
			$instance->base64Encoded = (bool)$data->base64Encoded;
		}
		if (isset($data->data)) {
			$instance->data = (string)$data->data;
		}
		if (isset($data->eof)) {
			$instance->eof = (bool)$data->eof;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->base64Encoded !== null) {
			$data->base64Encoded = $this->base64Encoded;
		}
		if ($this->data !== null) {
			$data->data = $this->data;
		}
		if ($this->eof !== null) {
			$data->eof = $this->eof;
		}
		return $data;
	}
}
