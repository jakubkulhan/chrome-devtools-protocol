<?php

namespace ChromeDevtoolsProtocol\Model\Tracing;

/**
 * Signals that tracing is stopped and there is no trace buffers pending flush, all data were delivered via dataCollected events.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TracingCompleteEvent implements \JsonSerializable
{
	/**
	 * A handle of the stream that holds resulting trace data.
	 *
	 * @var string
	 */
	public $stream;

	/**
	 * Compression format of returned stream.
	 *
	 * @var string
	 */
	public $streamCompression;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->stream)) {
			$instance->stream = (string)$data->stream;
		}
		if (isset($data->streamCompression)) {
			$instance->streamCompression = (string)$data->streamCompression;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->stream !== null) {
			$data->stream = $this->stream;
		}
		if ($this->streamCompression !== null) {
			$data->streamCompression = $this->streamCompression;
		}
		return $data;
	}
}
