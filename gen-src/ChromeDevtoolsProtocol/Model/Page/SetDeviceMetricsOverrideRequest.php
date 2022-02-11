<?php

namespace ChromeDevtoolsProtocol\Model\Page;

use ChromeDevtoolsProtocol\Model\Emulation\ScreenOrientation;

/**
 * Request for Page.setDeviceMetricsOverride command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDeviceMetricsOverrideRequest implements \JsonSerializable
{
	/**
	 * Overriding width value in pixels (minimum 0, maximum 10000000). 0 disables the override.
	 *
	 * @var int
	 */
	public $width;

	/**
	 * Overriding height value in pixels (minimum 0, maximum 10000000). 0 disables the override.
	 *
	 * @var int
	 */
	public $height;

	/**
	 * Overriding device scale factor value. 0 disables the override.
	 *
	 * @var int|float
	 */
	public $deviceScaleFactor;

	/**
	 * Whether to emulate mobile device. This includes viewport meta tag, overlay scrollbars, text autosizing and more.
	 *
	 * @var bool
	 */
	public $mobile;

	/**
	 * Scale to apply to resulting view image.
	 *
	 * @var int|float|null
	 */
	public $scale;

	/**
	 * Overriding screen width value in pixels (minimum 0, maximum 10000000).
	 *
	 * @var int|null
	 */
	public $screenWidth;

	/**
	 * Overriding screen height value in pixels (minimum 0, maximum 10000000).
	 *
	 * @var int|null
	 */
	public $screenHeight;

	/**
	 * Overriding view X position on screen in pixels (minimum 0, maximum 10000000).
	 *
	 * @var int|null
	 */
	public $positionX;

	/**
	 * Overriding view Y position on screen in pixels (minimum 0, maximum 10000000).
	 *
	 * @var int|null
	 */
	public $positionY;

	/**
	 * Do not set visible view size, rely upon explicit setVisibleSize call.
	 *
	 * @var bool|null
	 */
	public $dontSetVisibleSize;

	/**
	 * Screen orientation override.
	 *
	 * @var ScreenOrientation|null
	 */
	public $screenOrientation;

	/**
	 * The viewport dimensions and scale. If not set, the override is cleared.
	 *
	 * @var Viewport|null
	 */
	public $viewport;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->width)) {
			$instance->width = (int)$data->width;
		}
		if (isset($data->height)) {
			$instance->height = (int)$data->height;
		}
		if (isset($data->deviceScaleFactor)) {
			$instance->deviceScaleFactor = $data->deviceScaleFactor;
		}
		if (isset($data->mobile)) {
			$instance->mobile = (bool)$data->mobile;
		}
		if (isset($data->scale)) {
			$instance->scale = $data->scale;
		}
		if (isset($data->screenWidth)) {
			$instance->screenWidth = (int)$data->screenWidth;
		}
		if (isset($data->screenHeight)) {
			$instance->screenHeight = (int)$data->screenHeight;
		}
		if (isset($data->positionX)) {
			$instance->positionX = (int)$data->positionX;
		}
		if (isset($data->positionY)) {
			$instance->positionY = (int)$data->positionY;
		}
		if (isset($data->dontSetVisibleSize)) {
			$instance->dontSetVisibleSize = (bool)$data->dontSetVisibleSize;
		}
		if (isset($data->screenOrientation)) {
			$instance->screenOrientation = ScreenOrientation::fromJson($data->screenOrientation);
		}
		if (isset($data->viewport)) {
			$instance->viewport = Viewport::fromJson($data->viewport);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->width !== null) {
			$data->width = $this->width;
		}
		if ($this->height !== null) {
			$data->height = $this->height;
		}
		if ($this->deviceScaleFactor !== null) {
			$data->deviceScaleFactor = $this->deviceScaleFactor;
		}
		if ($this->mobile !== null) {
			$data->mobile = $this->mobile;
		}
		if ($this->scale !== null) {
			$data->scale = $this->scale;
		}
		if ($this->screenWidth !== null) {
			$data->screenWidth = $this->screenWidth;
		}
		if ($this->screenHeight !== null) {
			$data->screenHeight = $this->screenHeight;
		}
		if ($this->positionX !== null) {
			$data->positionX = $this->positionX;
		}
		if ($this->positionY !== null) {
			$data->positionY = $this->positionY;
		}
		if ($this->dontSetVisibleSize !== null) {
			$data->dontSetVisibleSize = $this->dontSetVisibleSize;
		}
		if ($this->screenOrientation !== null) {
			$data->screenOrientation = $this->screenOrientation->jsonSerialize();
		}
		if ($this->viewport !== null) {
			$data->viewport = $this->viewport->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetDeviceMetricsOverrideRequestBuilder
	 */
	public static function builder(): SetDeviceMetricsOverrideRequestBuilder
	{
		return new SetDeviceMetricsOverrideRequestBuilder();
	}
}
