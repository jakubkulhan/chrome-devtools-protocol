<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired when frame has stopped loading.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FrameStoppedLoadingEvent implements \JsonSerializable
{
	/**
	 * Id of the frame that has stopped loading.
	 *
	 * @var string
	 */
	public $frameId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		return $data;
	}
}
