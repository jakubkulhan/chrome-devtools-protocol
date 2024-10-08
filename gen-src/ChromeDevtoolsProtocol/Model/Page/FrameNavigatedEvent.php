<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired once navigation of the frame has completed. Frame is now associated with the new loader.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FrameNavigatedEvent implements \JsonSerializable
{
	/**
	 * Frame object.
	 *
	 * @var Frame
	 */
	public $frame;

	/** @var string */
	public $type;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frame)) {
			$instance->frame = Frame::fromJson($data->frame);
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frame !== null) {
			$data->frame = $this->frame->jsonSerialize();
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		return $data;
	}
}
