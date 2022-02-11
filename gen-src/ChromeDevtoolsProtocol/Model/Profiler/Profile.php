<?php

namespace ChromeDevtoolsProtocol\Model\Profiler;

/**
 * Profile.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Profile implements \JsonSerializable
{
	/**
	 * The list of profile nodes. First item is the root node.
	 *
	 * @var ProfileNode[]
	 */
	public $nodes;

	/**
	 * Profiling start timestamp in microseconds.
	 *
	 * @var int|float
	 */
	public $startTime;

	/**
	 * Profiling end timestamp in microseconds.
	 *
	 * @var int|float
	 */
	public $endTime;

	/**
	 * Ids of samples top nodes.
	 *
	 * @var int[]|null
	 */
	public $samples;

	/**
	 * Time intervals between adjacent samples in microseconds. The first delta is relative to the profile startTime.
	 *
	 * @var int[]|null
	 */
	public $timeDeltas;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodes)) {
			$instance->nodes = [];
			foreach ($data->nodes as $item) {
				$instance->nodes[] = ProfileNode::fromJson($item);
			}
		}
		if (isset($data->startTime)) {
			$instance->startTime = $data->startTime;
		}
		if (isset($data->endTime)) {
			$instance->endTime = $data->endTime;
		}
		if (isset($data->samples)) {
			$instance->samples = [];
			foreach ($data->samples as $item) {
				$instance->samples[] = (int)$item;
			}
		}
		if (isset($data->timeDeltas)) {
			$instance->timeDeltas = [];
			foreach ($data->timeDeltas as $item) {
				$instance->timeDeltas[] = (int)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodes !== null) {
			$data->nodes = [];
			foreach ($this->nodes as $item) {
				$data->nodes[] = $item->jsonSerialize();
			}
		}
		if ($this->startTime !== null) {
			$data->startTime = $this->startTime;
		}
		if ($this->endTime !== null) {
			$data->endTime = $this->endTime;
		}
		if ($this->samples !== null) {
			$data->samples = [];
			foreach ($this->samples as $item) {
				$data->samples[] = $item;
			}
		}
		if ($this->timeDeltas !== null) {
			$data->timeDeltas = [];
			foreach ($this->timeDeltas as $item) {
				$data->timeDeltas[] = $item;
			}
		}
		return $data;
	}
}
