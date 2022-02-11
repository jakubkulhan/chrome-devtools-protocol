<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Information about the Frame hierarchy.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FrameTree implements \JsonSerializable
{
	/**
	 * Frame information for this tree item.
	 *
	 * @var Frame
	 */
	public $frame;

	/**
	 * Child frames.
	 *
	 * @var FrameTree[]|null
	 */
	public $childFrames;


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
		if (isset($data->childFrames)) {
			$instance->childFrames = [];
			foreach ($data->childFrames as $item) {
				$instance->childFrames[] = FrameTree::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frame !== null) {
			$data->frame = $this->frame->jsonSerialize();
		}
		if ($this->childFrames !== null) {
			$data->childFrames = [];
			foreach ($this->childFrames as $item) {
				$data->childFrames[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
