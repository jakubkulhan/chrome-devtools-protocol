<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Information about the Frame hierarchy along with their cached resources.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class FrameResourceTree implements \JsonSerializable
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
	 * @var FrameResourceTree[]|null
	 */
	public $childFrames;

	/**
	 * Information about frame resources.
	 *
	 * @var FrameResource[]
	 */
	public $resources;


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
				$instance->childFrames[] = FrameResourceTree::fromJson($item);
			}
		}
		if (isset($data->resources)) {
			$instance->resources = [];
			foreach ($data->resources as $item) {
				$instance->resources[] = FrameResource::fromJson($item);
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
		if ($this->resources !== null) {
			$data->resources = [];
			foreach ($this->resources as $item) {
				$data->resources[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
