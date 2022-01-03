<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Response to Overlay.getGridHighlightObjectsForTest command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetGridHighlightObjectsForTestResponse implements \JsonSerializable
{
	/**
	 * Grid Highlight data for the node ids provided.
	 *
	 * @var object
	 */
	public $highlights;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->highlights)) {
			$instance->highlights = $data->highlights;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->highlights !== null) {
			$data->highlights = $this->highlights;
		}
		return $data;
	}
}
