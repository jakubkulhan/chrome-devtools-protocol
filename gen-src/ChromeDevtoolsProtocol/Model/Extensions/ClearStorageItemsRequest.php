<?php

namespace ChromeDevtoolsProtocol\Model\Extensions;

/**
 * Request for Extensions.clearStorageItems command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ClearStorageItemsRequest implements \JsonSerializable
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
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ClearStorageItemsRequestBuilder
	 */
	public static function builder(): ClearStorageItemsRequestBuilder
	{
		return new ClearStorageItemsRequestBuilder();
	}
}
