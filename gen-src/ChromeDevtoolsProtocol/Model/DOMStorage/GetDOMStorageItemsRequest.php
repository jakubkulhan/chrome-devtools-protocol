<?php

namespace ChromeDevtoolsProtocol\Model\DOMStorage;

/**
 * Request for DOMStorage.getDOMStorageItems command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetDOMStorageItemsRequest implements \JsonSerializable
{
	/** @var StorageId */
	public $storageId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->storageId)) {
			$instance->storageId = StorageId::fromJson($data->storageId);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->storageId !== null) {
			$data->storageId = $this->storageId->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetDOMStorageItemsRequestBuilder
	 */
	public static function builder(): GetDOMStorageItemsRequestBuilder
	{
		return new GetDOMStorageItemsRequestBuilder();
	}
}
