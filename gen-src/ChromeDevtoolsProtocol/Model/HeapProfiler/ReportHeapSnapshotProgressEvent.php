<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * Named type HeapProfiler.ReportHeapSnapshotProgressEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReportHeapSnapshotProgressEvent implements \JsonSerializable
{
	/** @var int */
	public $done;

	/** @var int */
	public $total;

	/** @var bool|null */
	public $finished;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->done)) {
			$instance->done = (int)$data->done;
		}
		if (isset($data->total)) {
			$instance->total = (int)$data->total;
		}
		if (isset($data->finished)) {
			$instance->finished = (bool)$data->finished;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->done !== null) {
			$data->done = $this->done;
		}
		if ($this->total !== null) {
			$data->total = $this->total;
		}
		if ($this->finished !== null) {
			$data->finished = $this->finished;
		}
		return $data;
	}
}
