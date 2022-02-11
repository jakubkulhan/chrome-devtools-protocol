<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.printToPDF command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PrintToPDFResponse implements \JsonSerializable
{
	/**
	 * Base64-encoded pdf data. Empty if |returnAsStream| is specified. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string
	 */
	public $data;

	/**
	 * A handle of the stream that holds resulting PDF data.
	 *
	 * @var string
	 */
	public $stream;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->data)) {
			$instance->data = (string)$data->data;
		}
		if (isset($data->stream)) {
			$instance->stream = (string)$data->stream;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->data !== null) {
			$data->data = $this->data;
		}
		if ($this->stream !== null) {
			$data->stream = $this->stream;
		}
		return $data;
	}
}
