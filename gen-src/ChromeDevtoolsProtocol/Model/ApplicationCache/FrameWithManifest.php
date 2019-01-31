<?php

namespace ChromeDevtoolsProtocol\Model\ApplicationCache;

/**
 * Frame identifier - manifest URL pair.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FrameWithManifest implements \JsonSerializable
{
	/**
	 * Frame identifier.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * Manifest URL.
	 *
	 * @var string
	 */
	public $manifestURL;

	/**
	 * Application cache status.
	 *
	 * @var int
	 */
	public $status;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->manifestURL)) {
			$instance->manifestURL = (string)$data->manifestURL;
		}
		if (isset($data->status)) {
			$instance->status = (int)$data->status;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->manifestURL !== null) {
			$data->manifestURL = $this->manifestURL;
		}
		if ($this->status !== null) {
			$data->status = $this->status;
		}
		return $data;
	}
}
