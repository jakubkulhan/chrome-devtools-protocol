<?php

namespace ChromeDevtoolsProtocol\Model\Tracing;

/**
 * Response to Tracing.getTrackEventDescriptor command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetTrackEventDescriptorResponse implements \JsonSerializable
{
	/**
	 * Base64-encoded serialized perfetto.protos.TrackEventDescriptor protobuf message. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string
	 */
	public $descriptor;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->descriptor)) {
			$instance->descriptor = (string)$data->descriptor;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->descriptor !== null) {
			$data->descriptor = $this->descriptor;
		}
		return $data;
	}
}
