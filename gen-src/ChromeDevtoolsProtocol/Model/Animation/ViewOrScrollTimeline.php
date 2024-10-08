<?php

namespace ChromeDevtoolsProtocol\Model\Animation;

/**
 * Timeline instance
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ViewOrScrollTimeline implements \JsonSerializable
{
	/**
	 * Scroll container node
	 *
	 * @var int
	 */
	public $sourceNodeId;

	/**
	 * Represents the starting scroll position of the timeline as a length offset in pixels from scroll origin.
	 *
	 * @var int|float|null
	 */
	public $startOffset;

	/**
	 * Represents the ending scroll position of the timeline as a length offset in pixels from scroll origin.
	 *
	 * @var int|float|null
	 */
	public $endOffset;

	/**
	 * The element whose principal box's visibility in the scrollport defined the progress of the timeline. Does not exist for animations with ScrollTimeline
	 *
	 * @var int
	 */
	public $subjectNodeId;

	/**
	 * Orientation of the scroll
	 *
	 * @var string
	 */
	public $axis;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->sourceNodeId)) {
			$instance->sourceNodeId = (int)$data->sourceNodeId;
		}
		if (isset($data->startOffset)) {
			$instance->startOffset = $data->startOffset;
		}
		if (isset($data->endOffset)) {
			$instance->endOffset = $data->endOffset;
		}
		if (isset($data->subjectNodeId)) {
			$instance->subjectNodeId = (int)$data->subjectNodeId;
		}
		if (isset($data->axis)) {
			$instance->axis = (string)$data->axis;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->sourceNodeId !== null) {
			$data->sourceNodeId = $this->sourceNodeId;
		}
		if ($this->startOffset !== null) {
			$data->startOffset = $this->startOffset;
		}
		if ($this->endOffset !== null) {
			$data->endOffset = $this->endOffset;
		}
		if ($this->subjectNodeId !== null) {
			$data->subjectNodeId = $this->subjectNodeId;
		}
		if ($this->axis !== null) {
			$data->axis = $this->axis;
		}
		return $data;
	}
}
