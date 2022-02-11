<?php

namespace ChromeDevtoolsProtocol\Model\Browser;

/**
 * Response to Browser.getWindowBounds command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetWindowBoundsResponse implements \JsonSerializable
{
	/**
	 * Bounds information of the window. When window state is 'minimized', the restored window position and size are returned.
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
		if (isset($data->bounds)) {
			$instance->bounds = Bounds::fromJson($data->bounds);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->bounds !== null) {
			$data->bounds = $this->bounds->jsonSerialize();
		}
		return $data;
	}
}
