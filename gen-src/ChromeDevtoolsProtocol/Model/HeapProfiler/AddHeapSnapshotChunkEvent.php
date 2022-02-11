<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * Named type HeapProfiler.AddHeapSnapshotChunkEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddHeapSnapshotChunkEvent implements \JsonSerializable
{
	/** @var string */
	public $chunk;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->chunk)) {
			$instance->chunk = (string)$data->chunk;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->chunk !== null) {
			$data->chunk = $this->chunk;
		}
		return $data;
	}
}
