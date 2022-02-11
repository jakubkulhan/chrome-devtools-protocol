<?php

namespace ChromeDevtoolsProtocol\Model\LayerTree;

/**
 * Response to LayerTree.makeSnapshot command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class MakeSnapshotResponse implements \JsonSerializable
{
	/**
	 * The id of the layer snapshot.
	 *
	 * @var string
	 */
	public $snapshotId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->snapshotId)) {
			$instance->snapshotId = (string)$data->snapshotId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->snapshotId !== null) {
			$data->snapshotId = $this->snapshotId;
		}
		return $data;
	}
}
