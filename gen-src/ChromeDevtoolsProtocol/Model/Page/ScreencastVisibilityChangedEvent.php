<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired when the page with currently enabled screencast was shown or hidden `.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScreencastVisibilityChangedEvent implements \JsonSerializable
{
	/**
	 * True if the page is visible.
	 *
	 * @var bool
	 */
	public $visible;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->visible)) {
			$instance->visible = (bool)$data->visible;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->visible !== null) {
			$data->visible = $this->visible;
		}
		return $data;
	}
}
