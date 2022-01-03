<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * Response to HeapProfiler.getHeapObjectId command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetHeapObjectIdResponse implements \JsonSerializable
{
	/**
	 * Id of the heap snapshot object corresponding to the passed remote object id.
	 *
	 * @var string
	 */
	public $heapSnapshotObjectId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->heapSnapshotObjectId)) {
			$instance->heapSnapshotObjectId = (string)$data->heapSnapshotObjectId;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->heapSnapshotObjectId !== null) {
			$data->heapSnapshotObjectId = $this->heapSnapshotObjectId;
		}
		return $data;
	}
}
