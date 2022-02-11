<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Browser window bounds information
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Bounds implements \JsonSerializable
{
	/**
	 * The offset from the left edge of the screen to the window in pixels.
	 *
	 * @var int|null
	 */
	public $left;

	/**
	 * The offset from the top edge of the screen to the window in pixels.
	 *
	 * @var int|null
	 */
	public $top;

	/**
	 * The window width in pixels.
	 *
	 * @var int|null
	 */
	public $width;

	/**
	 * The window height in pixels.
	 *
	 * @var int|null
	 */
	public $height;

	/**
	 * The window state. Default to normal.
	 *
	 * @var string
	 */
	public $windowState;


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
		if (isset($data->windowState)) {
			$instance->windowState = (string)$data->windowState;
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
		if ($this->windowState !== null) {
			$data->windowState = $this->windowState;
		}
		return $data;
	}
}
