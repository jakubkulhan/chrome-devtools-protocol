<?php

namespace ChromeDevtoolsProtocol\Model\LayerTree;

/**
 * Response to LayerTree.snapshotCommandLog command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SnapshotCommandLogResponse implements \JsonSerializable
{
	/**
	 * The array of canvas function calls.
	 *
	 * @var object[]
	 */
	public $commandLog;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->commandLog)) {
			$instance->commandLog = [];
			foreach ($data->commandLog as $item) {
				$instance->commandLog[] = $item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->commandLog !== null) {
			$data->commandLog = [];
			foreach ($this->commandLog as $item) {
				$data->commandLog[] = $item;
			}
		}
		return $data;
	}
}
