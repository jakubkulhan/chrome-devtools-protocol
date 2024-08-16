<?php

namespace ChromeDevtoolsProtocol\Model\Extensions;

/**
 * Request for Extensions.setStorageItems command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetStorageItemsRequest implements \JsonSerializable
{
	/**
	 * ID of extension.
	 *
	 * @var string
	 */
	public $id;

	/**
	 * StorageArea to set data in.
	 *
	 * @var string
	 */
	public $storageArea;

	/**
	 * Values to set.
	 *
	 * @var object
	 */
	public $values;


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
		if (isset($data->values)) {
			$instance->values = $data->values;
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
		if ($this->values !== null) {
			$data->values = $this->values;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetStorageItemsRequestBuilder
	 */
	public static function builder(): SetStorageItemsRequestBuilder
	{
		return new SetStorageItemsRequestBuilder();
	}
}
