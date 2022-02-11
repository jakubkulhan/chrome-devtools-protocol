<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Request for Browser.setWindowBounds command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetWindowBoundsRequest implements \JsonSerializable
{
	/**
	 * Browser window id.
	 *
	 * @var int
	 */
	public $windowId;

	/**
	 * New window bounds. The 'minimized', 'maximized' and 'fullscreen' states cannot be combined with 'left', 'top', 'width' or 'height'. Leaves unspecified fields unchanged.
	 *
	 * @var Bounds
	 */
	public $bounds;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->windowId)) {
			$instance->windowId = (int)$data->windowId;
		}
		if (isset($data->bounds)) {
			$instance->bounds = Bounds::fromJson($data->bounds);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->windowId !== null) {
			$data->windowId = $this->windowId;
		}
		if ($this->bounds !== null) {
			$data->bounds = $this->bounds->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetWindowBoundsRequestBuilder
	 */
	public static function builder(): SetWindowBoundsRequestBuilder
	{
		return new SetWindowBoundsRequestBuilder();
	}
}
