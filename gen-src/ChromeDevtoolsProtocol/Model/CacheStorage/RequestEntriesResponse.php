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
	 * If true, there are more entries to fetch in the given range.
	 *
	 * @var bool
	 */
	public $hasMore;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->cacheDataEntries)) {
			$instance->cacheDataEntries = [];
			foreach ($data->cacheDataEntries as $item) {
				$instance->cacheDataEntries[] = DataEntry::fromJson($item);
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
		if ($this->cacheDataEntries !== null) {
			$data->cacheDataEntries = [];
			foreach ($this->cacheDataEntries as $item) {
				$data->cacheDataEntries[] = $item->jsonSerialize();
			}
		}
		if ($this->hasMore !== null) {
			$data->hasMore = $this->hasMore;
		}
		return $data;
	}
}
