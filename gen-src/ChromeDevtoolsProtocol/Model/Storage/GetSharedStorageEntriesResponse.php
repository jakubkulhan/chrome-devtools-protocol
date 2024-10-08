<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Response to Storage.getSharedStorageEntries command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetSharedStorageEntriesResponse implements \JsonSerializable
{
	/** @var SharedStorageEntry[] */
	public $entries;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->entries)) {
			$instance->entries = [];
			foreach ($data->entries as $item) {
				$instance->entries[] = SharedStorageEntry::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->entries !== null) {
			$data->entries = [];
			foreach ($this->entries as $item) {
				$data->entries[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
