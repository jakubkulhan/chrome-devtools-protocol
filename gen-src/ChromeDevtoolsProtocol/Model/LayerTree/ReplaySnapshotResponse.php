<?php

namespace ChromeDevtoolsProtocol\Model\LayerTree;

/**
 * Response to LayerTree.replaySnapshot command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReplaySnapshotResponse implements \JsonSerializable
{
	/**
	 * A data: URL for resulting image.
	 *
	 * @var string
	 */
	public $dataURL;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->dataURL)) {
			$instance->dataURL = (string)$data->dataURL;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->dataURL !== null) {
			$data->dataURL = $this->dataURL;
		}
		return $data;
	}
}
