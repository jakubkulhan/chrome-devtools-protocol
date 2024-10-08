<?php

namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * CSS Layer data.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CSSLayerData implements \JsonSerializable
{
	/**
	 * Layer name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Direct sub-layers
	 *
	 * @var CSSLayerData[]|null
	 */
	public $subLayers;

	/**
	 * Layer order. The order determines the order of the layer in the cascade order. A higher number has higher priority in the cascade order.
	 *
	 * @var int|float
	 */
	public $order;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->subLayers)) {
			$instance->subLayers = [];
			foreach ($data->subLayers as $item) {
				$instance->subLayers[] = CSSLayerData::fromJson($item);
			}
		}
		if (isset($data->order)) {
			$instance->order = $data->order;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->subLayers !== null) {
			$data->subLayers = [];
			foreach ($this->subLayers as $item) {
				$data->subLayers[] = $item->jsonSerialize();
			}
		}
		if ($this->order !== null) {
			$data->order = $this->order;
		}
		return $data;
	}
}
