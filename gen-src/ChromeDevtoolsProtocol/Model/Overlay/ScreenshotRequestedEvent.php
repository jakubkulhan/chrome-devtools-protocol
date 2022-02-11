<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

use ChromeDevtoolsProtocol\Model\Page\Viewport;

/**
 * Fired when user asks to capture screenshot of some area on the page.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScreenshotRequestedEvent implements \JsonSerializable
{
	/**
	 * Viewport to capture, in device independent pixels (dip).
	 *
	 * @var Viewport
	 */
	public $viewport;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->viewport)) {
			$instance->viewport = Viewport::fromJson($data->viewport);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->viewport !== null) {
			$data->viewport = $this->viewport->jsonSerialize();
		}
		return $data;
	}
}
