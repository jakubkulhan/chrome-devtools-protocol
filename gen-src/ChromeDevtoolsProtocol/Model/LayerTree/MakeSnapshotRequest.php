<?php

namespace ChromeDevtoolsProtocol\Model\LayerTree;

/**
 * Request for LayerTree.makeSnapshot command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class MakeSnapshotRequest implements \JsonSerializable
{
	/**
	 * The id of the layer.
	 *
	 * @var string
	 */
	public $layerId;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->layerId !== null) {
			$data->layerId = $this->layerId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return MakeSnapshotRequestBuilder
	 */
	public static function builder(): MakeSnapshotRequestBuilder
	{
		return new MakeSnapshotRequestBuilder();
	}
}
