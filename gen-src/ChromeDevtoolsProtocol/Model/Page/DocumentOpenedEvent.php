<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired when opening document to write to.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DocumentOpenedEvent implements \JsonSerializable
{
	/**
	 * Frame object.
	 *
	 * @var Frame
	 */
	public $frame;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frame !== null) {
			$data->frame = $this->frame->jsonSerialize();
		}
		return $data;
	}
}
