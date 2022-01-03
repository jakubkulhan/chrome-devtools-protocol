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


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->data)) {
			$instance->data = (string)$data->data;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->data !== null) {
			$data->data = $this->data;
		}
		return $data;
	}
}
