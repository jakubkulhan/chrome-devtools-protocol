<?php

namespace ChromeDevtoolsProtocol\Model\IndexedDB;

/**
 * Response to IndexedDB.requestData command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestDataResponse implements \JsonSerializable
{
	/**
	 * Array of object store data entries.
	 *
	 * @var DataEntry[]
	 */
	public $objectStoreDataEntries;

	/**
	 * If true, there are more entries to fetch in the given range.
	 *
	 * @var bool
	 */
	public $hasMore;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->objectStoreDataEntries)) {
			$instance->objectStoreDataEntries = [];
			foreach ($data->objectStoreDataEntries as $item) {
				$instance->objectStoreDataEntries[] = DataEntry::fromJson($item);
			}
		}
		if (isset($data->hasMore)) {
			$instance->hasMore = (bool)$data->hasMore;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->objectStoreDataEntries !== null) {
			$data->objectStoreDataEntries = [];
			foreach ($this->objectStoreDataEntries as $item) {
				$data->objectStoreDataEntries[] = $item->jsonSerialize();
			}
		}
		if ($this->hasMore !== null) {
			$data->hasMore = $this->hasMore;
		}
		return $data;
	}
}
