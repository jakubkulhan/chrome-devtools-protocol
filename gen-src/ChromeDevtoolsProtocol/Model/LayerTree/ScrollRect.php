<?php

namespace ChromeDevtoolsProtocol\Model\LayerTree;

use ChromeDevtoolsProtocol\Model\DOM\Rect;

/**
 * Rectangle where scrolling happens on the main thread.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ScrollRect implements \JsonSerializable
{
	/**
	 * Rectangle itself.
	 *
	 * @var Rect
	 */
	public $rect;

	/**
	 * Reason for rectangle to force scrolling on the main thread
	 *
	 * @var string
	 */
	public $type;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->rect)) {
			$instance->rect = Rect::fromJson($data->rect);
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->rect !== null) {
			$data->rect = $this->rect->jsonSerialize();
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		return $data;
	}
}
