<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.stopScreenRecording command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StopScreenRecordingResponse implements \JsonSerializable
{
	/**
	 * A handle of the stream that holds resulting screencast data.
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
		if (isset($data->stream)) {
			$instance->stream = (string)$data->stream;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->stream !== null) {
			$data->stream = $this->stream;
		}
		return $data;
	}
}
