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
	 * Indicates whether some trace data is known to have been lost, e.g. because the trace ring buffer wrapped around.
	 *
	 * @var bool
	 */
	public $dataLossOccurred;

	/**
	 * A handle of the stream that holds resulting trace data.
	 *
	 * @var string
	 */
	public $stream;

	/**
	 * Trace data format of returned stream.
	 *
	 * @var string
	 */
	public $traceFormat;

	/**
	 * Compression format of returned stream.
	 *
	 * @var string
	 */
	public $streamCompression;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->dataLossOccurred)) {
			$instance->dataLossOccurred = (bool)$data->dataLossOccurred;
		}
		if (isset($data->stream)) {
			$instance->stream = (string)$data->stream;
		}
		if (isset($data->traceFormat)) {
			$instance->traceFormat = (string)$data->traceFormat;
		}
		if (isset($data->streamCompression)) {
			$instance->streamCompression = (string)$data->streamCompression;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->dataLossOccurred !== null) {
			$data->dataLossOccurred = $this->dataLossOccurred;
		}
		if ($this->stream !== null) {
			$data->stream = $this->stream;
		}
		if ($this->traceFormat !== null) {
			$data->traceFormat = $this->traceFormat;
		}
		if ($this->streamCompression !== null) {
			$data->streamCompression = $this->streamCompression;
		}
		return $data;
	}
}
