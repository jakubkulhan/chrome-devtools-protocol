<?php

namespace ChromeDevtoolsProtocol\Model\LayerTree;

use ChromeDevtoolsProtocol\Model\DOM\Rect;

/**
 * Named type LayerTree.LayerPaintedEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LayerPaintedEvent implements \JsonSerializable
{
	/**
	 * The id of the painted layer.
	 *
	 * @var string
	 */
	public $layerId;

	/**
	 * Clip rectangle.
	 *
	 * @var Rect
	 */
	public $clip;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->layerId)) {
			$instance->layerId = (string)$data->layerId;
		}
		if (isset($data->clip)) {
			$instance->clip = Rect::fromJson($data->clip);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->layerId !== null) {
			$data->layerId = $this->layerId;
		}
		if ($this->clip !== null) {
			$data->clip = $this->clip->jsonSerialize();
		}
		return $data;
	}
}
