<?php

namespace ChromeDevtoolsProtocol\Model\CacheStorage;

/**
 * Response to CacheStorage.requestEntries command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestEntriesResponse implements \JsonSerializable
{
	/**
	 * Array of object store data entries.
	 *
	 * @var DataEntry[]
	 */
	public $cacheDataEntries;

	/**
	 * Count of returned entries from this storage. If pathFilter is empty, it is the count of all entries from this storage.
	 *
	 * @var int|float
	 */
	public $returnCount;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->cacheDataEntries)) {
			$instance->cacheDataEntries = [];
			foreach ($data->cacheDataEntries as $item) {
				$instance->cacheDataEntries[] = DataEntry::fromJson($item);
			}
		}
		if (isset($data->returnCount)) {
			$instance->returnCount = $data->returnCount;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->cacheDataEntries !== null) {
			$data->cacheDataEntries = [];
			foreach ($this->cacheDataEntries as $item) {
				$data->cacheDataEntries[] = $item->jsonSerialize();
			}
		}
		if ($this->returnCount !== null) {
			$data->returnCount = $this->returnCount;
		}
		return $data;
	}
}
