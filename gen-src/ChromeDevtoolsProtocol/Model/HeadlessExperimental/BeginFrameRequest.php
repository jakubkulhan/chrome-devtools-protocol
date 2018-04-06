<?php
namespace ChromeDevtoolsProtocol\Model\HeadlessExperimental;

/**
 * Request for HeadlessExperimental.beginFrame command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BeginFrameRequest implements \JsonSerializable
{
	/**
	 * Timestamp of this BeginFrame (milliseconds since epoch). If not set, the current time will be used unless frameTicks is specified.
	 *
	 * @var int|float
	 */
	public $frameTime;

	/**
	 * Timestamp of this BeginFrame in Renderer TimeTicks (milliseconds of uptime). If not set, the current time will be used unless frameTime is specified.
	 *
	 * @var int|float|null
	 */
	public $frameTimeTicks;

	/**
	 * Deadline of this BeginFrame (milliseconds since epoch). If not set, the deadline will be calculated from the frameTime and interval unless deadlineTicks is specified.
	 *
	 * @var int|float
	 */
	public $deadline;

	/**
	 * Deadline of this BeginFrame in Renderer TimeTicks (milliseconds of uptime). If not set, the deadline will be calculated from the frameTime and interval unless deadline is specified.
	 *
	 * @var int|float|null
	 */
	public $deadlineTicks;

	/**
	 * The interval between BeginFrames that is reported to the compositor, in milliseconds. Defaults to a 60 frames/second interval, i.e. about 16.666 milliseconds.
	 *
	 * @var int|float|null
	 */
	public $interval;

	/**
	 * Whether updates should not be committed and drawn onto the display. False by default. If true, only side effects of the BeginFrame will be run, such as layout and animations, but any visual updates may not be visible on the display or in screenshots.
	 *
	 * @var bool|null
	 */
	public $noDisplayUpdates;

	/**
	 * If set, a screenshot of the frame will be captured and returned in the response. Otherwise, no screenshot will be captured. Note that capturing a screenshot can fail, for example, during renderer initialization. In such a case, no screenshot data will be returned.
	 *
	 * @var ScreenshotParams|null
	 */
	public $screenshot;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameTime)) {
			$instance->frameTime = $data->frameTime;
		}
		if (isset($data->frameTimeTicks)) {
			$instance->frameTimeTicks = $data->frameTimeTicks;
		}
		if (isset($data->deadline)) {
			$instance->deadline = $data->deadline;
		}
		if (isset($data->deadlineTicks)) {
			$instance->deadlineTicks = $data->deadlineTicks;
		}
		if (isset($data->interval)) {
			$instance->interval = $data->interval;
		}
		if (isset($data->noDisplayUpdates)) {
			$instance->noDisplayUpdates = (bool)$data->noDisplayUpdates;
		}
		if (isset($data->screenshot)) {
			$instance->screenshot = ScreenshotParams::fromJson($data->screenshot);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameTime !== null) {
			$data->frameTime = $this->frameTime;
		}
		if ($this->frameTimeTicks !== null) {
			$data->frameTimeTicks = $this->frameTimeTicks;
		}
		if ($this->deadline !== null) {
			$data->deadline = $this->deadline;
		}
		if ($this->deadlineTicks !== null) {
			$data->deadlineTicks = $this->deadlineTicks;
		}
		if ($this->interval !== null) {
			$data->interval = $this->interval;
		}
		if ($this->noDisplayUpdates !== null) {
			$data->noDisplayUpdates = $this->noDisplayUpdates;
		}
		if ($this->screenshot !== null) {
			$data->screenshot = $this->screenshot->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return BeginFrameRequestBuilder
	 */
	public static function builder(): BeginFrameRequestBuilder
	{
		return new BeginFrameRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
