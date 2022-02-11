<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Request for Browser.getWindowBounds command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetWindowBoundsRequest implements \JsonSerializable
{
	/**
	 * Browser window id.
	 *
	 * @var int
	 */
	public $windowId;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->windowId !== null) {
			$data->windowId = $this->windowId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetWindowBoundsRequestBuilder
	 */
	public static function builder(): GetWindowBoundsRequestBuilder
	{
		return new GetWindowBoundsRequestBuilder();
	}
}
