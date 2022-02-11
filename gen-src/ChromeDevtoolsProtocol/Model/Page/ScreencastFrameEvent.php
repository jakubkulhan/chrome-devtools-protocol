<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Compressed image data requested by the `startScreencast`.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScreencastFrameEvent implements \JsonSerializable
{
	/**
	 * Base64-encoded compressed image. (Encoded as a base64 string when passed over JSON)
	 *
	 * @var string
	 */
	public $data;

	/**
	 * Screencast frame metadata.
	 *
	 * @var ScreencastFrameMetadata
	 */
	public $metadata;

	/**
	 * Frame number.
	 *
	 * @var int
	 */
	public $sessionId;


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
		if (isset($data->metadata)) {
			$instance->metadata = ScreencastFrameMetadata::fromJson($data->metadata);
		}
		if (isset($data->sessionId)) {
			$instance->sessionId = (int)$data->sessionId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->data !== null) {
			$data->data = $this->data;
		}
		if ($this->metadata !== null) {
			$data->metadata = $this->metadata->jsonSerialize();
		}
		if ($this->sessionId !== null) {
			$data->sessionId = $this->sessionId;
		}
		return $data;
	}
}
