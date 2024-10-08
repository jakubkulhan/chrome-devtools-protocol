<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Response to Network.streamResourceContent command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StreamResourceContentResponse implements \JsonSerializable
{
	/**
	 * Data that has been buffered until streaming is enabled. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string
	 */
	public $bufferedData;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->bufferedData)) {
			$instance->bufferedData = (string)$data->bufferedData;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->bufferedData !== null) {
			$data->bufferedData = $this->bufferedData;
		}
		return $data;
	}
}
