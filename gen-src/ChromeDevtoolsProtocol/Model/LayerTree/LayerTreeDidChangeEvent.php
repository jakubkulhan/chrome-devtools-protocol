<?php

namespace ChromeDevtoolsProtocol\Model\LayerTree;

/**
 * Named type LayerTree.LayerTreeDidChangeEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LayerTreeDidChangeEvent implements \JsonSerializable
{
	/**
	 * Layer tree, absent if not in the comspositing mode.
	 *
	 * @var Layer[]|null
	 */
	public $layers;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->layers)) {
			$instance->layers = [];
			foreach ($data->layers as $item) {
				$instance->layers[] = Layer::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->layers !== null) {
			$data->layers = [];
			foreach ($this->layers as $item) {
				$data->layers[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
