<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Request for Browser.setContentsSize command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetContentsSizeRequest implements \JsonSerializable
{
	/**
	 * Browser window id.
	 *
	 * @var int
	 */
	public $windowId;

	/**
	 * The window contents width in DIP. Assumes current width if omitted. Must be specified if 'height' is omitted.
	 *
	 * @var int|null
	 */
	public $width;

	/**
	 * The window contents height in DIP. Assumes current height if omitted. Must be specified if 'width' is omitted.
	 *
	 * @var int|null
	 */
	public $height;


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
		if (isset($data->width)) {
			$instance->width = (int)$data->width;
		}
		if (isset($data->height)) {
			$instance->height = (int)$data->height;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->windowId !== null) {
			$data->windowId = $this->windowId;
		}
		if ($this->width !== null) {
			$data->width = $this->width;
		}
		if ($this->height !== null) {
			$data->height = $this->height;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetContentsSizeRequestBuilder
	 */
	public static function builder(): SetContentsSizeRequestBuilder
	{
		return new SetContentsSizeRequestBuilder();
	}
}
