<?php

namespace ChromeDevtoolsProtocol\Model\DOMSnapshot;

/**
 * Response to DOMSnapshot.captureSnapshot command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CaptureSnapshotResponse implements \JsonSerializable
{
	/**
	 * The nodes in the DOM tree. The DOMNode at index 0 corresponds to the root document.
	 *
	 * @var DocumentSnapshot[]
	 */
	public $documents;

	/**
	 * Shared string table that all string properties refer to with indexes.
	 *
	 * @var string[]
	 */
	public $strings;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->documents)) {
			$instance->documents = [];
			foreach ($data->documents as $item) {
				$instance->documents[] = DocumentSnapshot::fromJson($item);
			}
		}
		if (isset($data->strings)) {
			$instance->strings = [];
			foreach ($data->strings as $item) {
				$instance->strings[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->documents !== null) {
			$data->documents = [];
			foreach ($this->documents as $item) {
				$data->documents[] = $item->jsonSerialize();
			}
		}
		if ($this->strings !== null) {
			$data->strings = [];
			foreach ($this->strings as $item) {
				$data->strings[] = $item;
			}
		}
		return $data;
	}
}
