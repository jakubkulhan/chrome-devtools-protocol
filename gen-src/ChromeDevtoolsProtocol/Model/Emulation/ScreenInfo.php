<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Screen information similar to the one returned by window.getScreenDetails() method, see https://w3c.github.io/window-management/#screendetailed.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScreenInfo implements \JsonSerializable
{
	/**
	 * Offset of the left edge of the screen.
	 *
	 * @var int
	 */
	public $left;

	/**
	 * Offset of the top edge of the screen.
	 *
	 * @var int
	 */
	public $top;

	/**
	 * Width of the screen.
	 *
	 * @var int
	 */
	public $width;

	/**
	 * Height of the screen.
	 *
	 * @var int
	 */
	public $height;

	/**
	 * Offset of the left edge of the available screen area.
	 *
	 * @var int
	 */
	public $availLeft;

	/**
	 * Offset of the top edge of the available screen area.
	 *
	 * @var int
	 */
	public $availTop;

	/**
	 * Width of the available screen area.
	 *
	 * @var int
	 */
	public $availWidth;

	/**
	 * Height of the available screen area.
	 *
	 * @var int
	 */
	public $availHeight;

	/**
	 * Specifies the screen's device pixel ratio.
	 *
	 * @var int|float
	 */
	public $devicePixelRatio;

	/**
	 * Specifies the screen's orientation.
	 *
	 * @var ScreenOrientation
	 */
	public $orientation;

	/**
	 * Specifies the screen's color depth in bits.
	 *
	 * @var int
	 */
	public $colorDepth;

	/**
	 * Indicates whether the device has multiple screens.
	 *
	 * @var bool
	 */
	public $isExtended;

	/**
	 * Indicates whether the screen is internal to the device or external, attached to the device.
	 *
	 * @var bool
	 */
	public $isInternal;

	/**
	 * Indicates whether the screen is set as the the operating system primary screen.
	 *
	 * @var bool
	 */
	public $isPrimary;

	/**
	 * Specifies the descriptive label for the screen.
	 *
	 * @var string
	 */
	public $label;

	/**
	 * Specifies the unique identifier of the screen.
	 *
	 * @var string
	 */
	public $id;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->left)) {
			$instance->left = (int)$data->left;
		}
		if (isset($data->top)) {
			$instance->top = (int)$data->top;
		}
		if (isset($data->width)) {
			$instance->width = (int)$data->width;
		}
		if (isset($data->height)) {
			$instance->height = (int)$data->height;
		}
		if (isset($data->availLeft)) {
			$instance->availLeft = (int)$data->availLeft;
		}
		if (isset($data->availTop)) {
			$instance->availTop = (int)$data->availTop;
		}
		if (isset($data->availWidth)) {
			$instance->availWidth = (int)$data->availWidth;
		}
		if (isset($data->availHeight)) {
			$instance->availHeight = (int)$data->availHeight;
		}
		if (isset($data->devicePixelRatio)) {
			$instance->devicePixelRatio = $data->devicePixelRatio;
		}
		if (isset($data->orientation)) {
			$instance->orientation = ScreenOrientation::fromJson($data->orientation);
		}
		if (isset($data->colorDepth)) {
			$instance->colorDepth = (int)$data->colorDepth;
		}
		if (isset($data->isExtended)) {
			$instance->isExtended = (bool)$data->isExtended;
		}
		if (isset($data->isInternal)) {
			$instance->isInternal = (bool)$data->isInternal;
		}
		if (isset($data->isPrimary)) {
			$instance->isPrimary = (bool)$data->isPrimary;
		}
		if (isset($data->label)) {
			$instance->label = (string)$data->label;
		}
		if (isset($data->id)) {
			$instance->id = (string)$data->id;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->left !== null) {
			$data->left = $this->left;
		}
		if ($this->top !== null) {
			$data->top = $this->top;
		}
		if ($this->width !== null) {
			$data->width = $this->width;
		}
		if ($this->height !== null) {
			$data->height = $this->height;
		}
		if ($this->availLeft !== null) {
			$data->availLeft = $this->availLeft;
		}
		if ($this->availTop !== null) {
			$data->availTop = $this->availTop;
		}
		if ($this->availWidth !== null) {
			$data->availWidth = $this->availWidth;
		}
		if ($this->availHeight !== null) {
			$data->availHeight = $this->availHeight;
		}
		if ($this->devicePixelRatio !== null) {
			$data->devicePixelRatio = $this->devicePixelRatio;
		}
		if ($this->orientation !== null) {
			$data->orientation = $this->orientation->jsonSerialize();
		}
		if ($this->colorDepth !== null) {
			$data->colorDepth = $this->colorDepth;
		}
		if ($this->isExtended !== null) {
			$data->isExtended = $this->isExtended;
		}
		if ($this->isInternal !== null) {
			$data->isInternal = $this->isInternal;
		}
		if ($this->isPrimary !== null) {
			$data->isPrimary = $this->isPrimary;
		}
		if ($this->label !== null) {
			$data->label = $this->label;
		}
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		return $data;
	}
}
