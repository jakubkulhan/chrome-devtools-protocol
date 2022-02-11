<?php

namespace ChromeDevtoolsProtocol\Model\PerformanceTimeline;

/**
 * Named type PerformanceTimeline.TimelineEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class TimelineEvent implements \JsonSerializable
{
	/**
	 * Identifies the frame that this event is related to. Empty for non-frame targets.
	 *
	 * @var string
	 */
	public $frameId;

	/**
	 * The event type, as specified in https://w3c.github.io/performance-timeline/#dom-performanceentry-entrytype This determines which of the optional "details" fiedls is present.
	 *
	 * @var string
	 */
	public $type;

	/**
	 * Name may be empty depending on the type.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Time in seconds since Epoch, monotonically increasing within document lifetime.
	 *
	 * @var int|float
	 */
	public $time;

	/**
	 * Event duration, if applicable.
	 *
	 * @var int|float|null
	 */
	public $duration;

	/** @var LargestContentfulPaint|null */
	public $lcpDetails;

	/** @var LayoutShift|null */
	public $layoutShiftDetails;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->time)) {
			$instance->time = $data->time;
		}
		if (isset($data->duration)) {
			$instance->duration = $data->duration;
		}
		if (isset($data->lcpDetails)) {
			$instance->lcpDetails = LargestContentfulPaint::fromJson($data->lcpDetails);
		}
		if (isset($data->layoutShiftDetails)) {
			$instance->layoutShiftDetails = LayoutShift::fromJson($data->layoutShiftDetails);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->time !== null) {
			$data->time = $this->time;
		}
		if ($this->duration !== null) {
			$data->duration = $this->duration;
		}
		if ($this->lcpDetails !== null) {
			$data->lcpDetails = $this->lcpDetails->jsonSerialize();
		}
		if ($this->layoutShiftDetails !== null) {
			$data->layoutShiftDetails = $this->layoutShiftDetails->jsonSerialize();
		}
		return $data;
	}
}
