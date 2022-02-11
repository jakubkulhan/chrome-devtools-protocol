<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Response to Page.captureSnapshot command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CaptureSnapshotResponse implements \JsonSerializable
{
	/**
	 * Serialized page data.
	 *
	 * @var string
	 */
	public $data;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->data !== null) {
			$data->data = $this->data;
		}
		return $data;
	}
}
