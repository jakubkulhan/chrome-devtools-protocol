<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.addScreen command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddScreenRequest implements \JsonSerializable
{
	/**
	 * Offset of the left edge of the screen in pixels.
	 *
	 * @var int
	 */
	public $left;

	/**
	 * Offset of the top edge of the screen in pixels.
	 *
	 * @var int
	 */
	public $top;

	/**
	 * The width of the screen in pixels.
	 *
	 * @var int
	 */
	public $width;

	/**
	 * The height of the screen in pixels.
	 *
	 * @var int
	 */
	public $height;

	/**
	 * Specifies the screen's work area. Default is entire screen.
	 *
	 * @var WorkAreaInsets|null
	 */
	public $workAreaInsets;

	/**
	 * Specifies the screen's device pixel ratio. Default is 1.
	 *
	 * @var int|float|null
	 */
	public $devicePixelRatio;

	/**
	 * Specifies the screen's rotation angle. Available values are 0, 90, 180 and 270. Default is 0.
	 *
	 * @var int|null
	 */
	public $rotation;

	/**
	 * Specifies the screen's color depth in bits. Default is 24.
	 *
	 * @var int|null
	 */
	public $colorDepth;

	/**
	 * Specifies the descriptive label for the screen. Default is none.
	 *
	 * @var string|null
	 */
	public $label;

	/**
	 * Indicates whether the screen is internal to the device or external, attached to the device. Default is false.
	 *
	 * @var bool|null
	 */
	public $isInternal;


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
		if (isset($data->workAreaInsets)) {
			$instance->workAreaInsets = WorkAreaInsets::fromJson($data->workAreaInsets);
		}
		if (isset($data->devicePixelRatio)) {
			$instance->devicePixelRatio = $data->devicePixelRatio;
		}
		if (isset($data->rotation)) {
			$instance->rotation = (int)$data->rotation;
		}
		if (isset($data->colorDepth)) {
			$instance->colorDepth = (int)$data->colorDepth;
		}
		if (isset($data->label)) {
			$instance->label = (string)$data->label;
		}
		if (isset($data->isInternal)) {
			$instance->isInternal = (bool)$data->isInternal;
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
		if ($this->workAreaInsets !== null) {
			$data->workAreaInsets = $this->workAreaInsets->jsonSerialize();
		}
		if ($this->devicePixelRatio !== null) {
			$data->devicePixelRatio = $this->devicePixelRatio;
		}
		if ($this->rotation !== null) {
			$data->rotation = $this->rotation;
		}
		if ($this->colorDepth !== null) {
			$data->colorDepth = $this->colorDepth;
		}
		if ($this->label !== null) {
			$data->label = $this->label;
		}
		if ($this->isInternal !== null) {
			$data->isInternal = $this->isInternal;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return AddScreenRequestBuilder
	 */
	public static function builder(): AddScreenRequestBuilder
	{
		return new AddScreenRequestBuilder();
	}
}
