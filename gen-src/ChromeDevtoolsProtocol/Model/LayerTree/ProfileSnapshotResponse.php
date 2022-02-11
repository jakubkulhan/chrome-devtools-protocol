<?php

namespace ChromeDevtoolsProtocol\Model\LayerTree;

/**
 * Response to LayerTree.profileSnapshot command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ProfileSnapshotResponse implements \JsonSerializable
{
	/**
	 * The array of paint profiles, one per run.
	 *
	 * @var int[][]|float[][]
	 */
	public $timings;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->timings)) {
			$instance->timings = [];
		if (isset($data->timings)) {
			$instance->timings = [];
			foreach ($data->timings as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = $nestedItem;
				}
				$instance->timings[] = $nested;
			}
		}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->timings !== null) {
			$data->timings = [];
		if ($this->timings !== null) {
			$data->timings = [];
			foreach ($this->timings as $item) {
				$nested = [];
				foreach ($item as $nestedItem) {
					$nested[] = $nestedItem;
				}
				$data->timings[] = $nested;
			}
		}
		}
		return $data;
	}
}
