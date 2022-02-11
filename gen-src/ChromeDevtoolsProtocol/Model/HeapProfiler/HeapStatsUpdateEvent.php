<?php

namespace ChromeDevtoolsProtocol\Model\HeapProfiler;

/**
 * If heap objects tracking has been started then backend may send update for one or more fragments
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class HeapStatsUpdateEvent implements \JsonSerializable
{
	/**
	 * An array of triplets. Each triplet describes a fragment. The first integer is the fragment index, the second integer is a total count of objects for the fragment, the third integer is a total size of the objects for the fragment.
	 *
	 * @var int[]
	 */
	public $statsUpdate;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->statsUpdate)) {
			$instance->statsUpdate = [];
			foreach ($data->statsUpdate as $item) {
				$instance->statsUpdate[] = (int)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->statsUpdate !== null) {
			$data->statsUpdate = [];
			foreach ($this->statsUpdate as $item) {
				$data->statsUpdate[] = $item;
			}
		}
		return $data;
	}
}
