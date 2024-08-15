<?php

namespace ChromeDevtoolsProtocol\Model\Extensions;

/**
 * Request for Extensions.removeStorageItems command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoveStorageItemsRequest implements \JsonSerializable
{
	/**
	 * ID of extension.
	 *
	 * @var string
	 */
	public $id;

	/**
	 * StorageArea to remove data from.
	 *
	 * @var string
	 */
	public $storageArea;

	/**
	 * Keys to remove.
	 *
	 * @var string[]
	 */
	public $keys;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->id)) {
			$instance->id = (string)$data->id;
		}
		if (isset($data->storageArea)) {
			$instance->storageArea = (string)$data->storageArea;
		}
		if (isset($data->keys)) {
			$instance->keys = [];
			foreach ($data->keys as $item) {
				$instance->keys[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->id !== null) {
			$data->id = $this->id;
		}
		if ($this->storageArea !== null) {
			$data->storageArea = $this->storageArea;
		}
		if ($this->keys !== null) {
			$data->keys = [];
			foreach ($this->keys as $item) {
				$data->keys[] = $item;
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return RemoveStorageItemsRequestBuilder
	 */
	public static function builder(): RemoveStorageItemsRequestBuilder
	{
		return new RemoveStorageItemsRequestBuilder();
	}
}
