<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Screencast frame metadata.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScreencastFrameMetadata implements \JsonSerializable
{
	/**
	 * Top offset in DIP.
	 *
	 * @var int|float
	 */
	public $offsetTop;

	/**
	 * Page scale factor.
	 *
	 * @var int|float
	 */
	public $pageScaleFactor;

	/**
	 * Device screen width in DIP.
	 *
	 * @var int|float
	 */
	public $deviceWidth;

	/**
	 * Device screen height in DIP.
	 *
	 * @var int|float
	 */
	public $deviceHeight;

	/**
	 * Position of horizontal scroll in CSS pixels.
	 *
	 * @var int|float
	 */
	public $scrollOffsetX;

	/**
	 * Position of vertical scroll in CSS pixels.
	 *
	 * @var int|float
	 */
	public $scrollOffsetY;

	/**
	 * Frame swap timestamp.
	 *
	 * @var int|float
	 */
	public $timestamp;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->offsetTop)) {
			$instance->offsetTop = $data->offsetTop;
		}
		if (isset($data->pageScaleFactor)) {
			$instance->pageScaleFactor = $data->pageScaleFactor;
		}
		if (isset($data->deviceWidth)) {
			$instance->deviceWidth = $data->deviceWidth;
		}
		if (isset($data->deviceHeight)) {
			$instance->deviceHeight = $data->deviceHeight;
		}
		if (isset($data->scrollOffsetX)) {
			$instance->scrollOffsetX = $data->scrollOffsetX;
		}
		if (isset($data->scrollOffsetY)) {
			$instance->scrollOffsetY = $data->scrollOffsetY;
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->offsetTop !== null) {
			$data->offsetTop = $this->offsetTop;
		}
		if ($this->pageScaleFactor !== null) {
			$data->pageScaleFactor = $this->pageScaleFactor;
		}
		if ($this->deviceWidth !== null) {
			$data->deviceWidth = $this->deviceWidth;
		}
		if ($this->deviceHeight !== null) {
			$data->deviceHeight = $this->deviceHeight;
		}
		if ($this->scrollOffsetX !== null) {
			$data->scrollOffsetX = $this->scrollOffsetX;
		}
		if ($this->scrollOffsetY !== null) {
			$data->scrollOffsetY = $this->scrollOffsetY;
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		return $data;
	}
}
