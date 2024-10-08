<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Visual viewport position, dimensions, and scale.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class VisualViewport implements \JsonSerializable
{
	/**
	 * Horizontal offset relative to the layout viewport (CSS pixels).
	 *
	 * @var int|float
	 */
	public $offsetX;

	/**
	 * Vertical offset relative to the layout viewport (CSS pixels).
	 *
	 * @var int|float
	 */
	public $offsetY;

	/**
	 * Horizontal offset relative to the document (CSS pixels).
	 *
	 * @var int|float
	 */
	public $pageX;

	/**
	 * Vertical offset relative to the document (CSS pixels).
	 *
	 * @var int|float
	 */
	public $pageY;

	/**
	 * Width (CSS pixels), excludes scrollbar if present.
	 *
	 * @var int|float
	 */
	public $clientWidth;

	/**
	 * Height (CSS pixels), excludes scrollbar if present.
	 *
	 * @var int|float
	 */
	public $clientHeight;

	/**
	 * Scale relative to the ideal viewport (size at width=device-width).
	 *
	 * @var int|float
	 */
	public $scale;

	/**
	 * Page zoom factor (CSS to device independent pixels ratio).
	 *
	 * @var int|float|null
	 */
	public $zoom;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->offsetX)) {
			$instance->offsetX = $data->offsetX;
		}
		if (isset($data->offsetY)) {
			$instance->offsetY = $data->offsetY;
		}
		if (isset($data->pageX)) {
			$instance->pageX = $data->pageX;
		}
		if (isset($data->pageY)) {
			$instance->pageY = $data->pageY;
		}
		if (isset($data->clientWidth)) {
			$instance->clientWidth = $data->clientWidth;
		}
		if (isset($data->clientHeight)) {
			$instance->clientHeight = $data->clientHeight;
		}
		if (isset($data->scale)) {
			$instance->scale = $data->scale;
		}
		if (isset($data->zoom)) {
			$instance->zoom = $data->zoom;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->offsetX !== null) {
			$data->offsetX = $this->offsetX;
		}
		if ($this->offsetY !== null) {
			$data->offsetY = $this->offsetY;
		}
		if ($this->pageX !== null) {
			$data->pageX = $this->pageX;
		}
		if ($this->pageY !== null) {
			$data->pageY = $this->pageY;
		}
		if ($this->clientWidth !== null) {
			$data->clientWidth = $this->clientWidth;
		}
		if ($this->clientHeight !== null) {
			$data->clientHeight = $this->clientHeight;
		}
		if ($this->scale !== null) {
			$data->scale = $this->scale;
		}
		if ($this->zoom !== null) {
			$data->zoom = $this->zoom;
		}
		return $data;
	}
}
