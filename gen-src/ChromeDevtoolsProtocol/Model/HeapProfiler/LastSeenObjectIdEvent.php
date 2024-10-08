<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * If heap objects tracking has been started then backend regularly sends a current value for last seen object id and corresponding timestamp. If the were changes in the heap since last event then one or more heapStatsUpdate events will be sent before a new lastSeenObjectId event.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class LastSeenObjectIdEvent implements \JsonSerializable
{
	/** @var int */
	public $lastSeenObjectId;

	/** @var int|float */
	public $timestamp;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->lastSeenObjectId)) {
			$instance->lastSeenObjectId = (int)$data->lastSeenObjectId;
		}
		if (isset($data->timestamp)) {
			$instance->timestamp = $data->timestamp;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->lastSeenObjectId !== null) {
			$data->lastSeenObjectId = $this->lastSeenObjectId;
		}
		if ($this->timestamp !== null) {
			$data->timestamp = $this->timestamp;
		}
		return $data;
	}
}
