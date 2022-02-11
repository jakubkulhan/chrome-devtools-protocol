<?php

namespace ChromeDevtoolsProtocol\Model\LayerTree;

/**
 * Request for LayerTree.loadSnapshot command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LoadSnapshotRequest implements \JsonSerializable
{
	/**
	 * An array of tiles composing the snapshot.
	 *
	 * @var PictureTile[]
	 */
	public $tiles;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->tiles)) {
			$instance->tiles = [];
			foreach ($data->tiles as $item) {
				$instance->tiles[] = PictureTile::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->tiles !== null) {
			$data->tiles = [];
			foreach ($this->tiles as $item) {
				$data->tiles[] = $item->jsonSerialize();
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return LoadSnapshotRequestBuilder
	 */
	public static function builder(): LoadSnapshotRequestBuilder
	{
		return new LoadSnapshotRequestBuilder();
	}
}
