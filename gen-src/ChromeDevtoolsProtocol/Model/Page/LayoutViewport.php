<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Layout viewport position and dimensions.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LayoutViewport implements \JsonSerializable
{
	/**
	 * Horizontal offset relative to the document (CSS pixels).
	 *
	 * @var int
	 */
	public $pageX;

	/**
	 * Vertical offset relative to the document (CSS pixels).
	 *
	 * @var int
	 */
	public $pageY;

	/**
	 * Width (CSS pixels), excludes scrollbar if present.
	 *
	 * @var int
	 */
	public $clientWidth;

	/**
	 * Height (CSS pixels), excludes scrollbar if present.
	 *
	 * @var int
	 */
	public $clientHeight;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->pageX)) {
			$instance->pageX = (int)$data->pageX;
		}
		if (isset($data->pageY)) {
			$instance->pageY = (int)$data->pageY;
		}
		if (isset($data->clientWidth)) {
			$instance->clientWidth = (int)$data->clientWidth;
		}
		if (isset($data->clientHeight)) {
			$instance->clientHeight = (int)$data->clientHeight;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
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
		return $data;
	}
}
