<?php

namespace ChromeDevtoolsProtocol\Model\DOMStorage;

/**
 * Request for DOMStorage.removeDOMStorageItem command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RemoveDOMStorageItemRequest implements \JsonSerializable
{
	/** @var StorageId */
	public $storageId;

	/** @var string */
	public $key;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->storageId)) {
			$instance->storageId = StorageId::fromJson($data->storageId);
		}
		if (isset($data->key)) {
			$instance->key = (string)$data->key;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->storageId !== null) {
			$data->storageId = $this->storageId->jsonSerialize();
		}
		if ($this->key !== null) {
			$data->key = $this->key;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return RemoveDOMStorageItemRequestBuilder
	 */
	public static function builder(): RemoveDOMStorageItemRequestBuilder
	{
		return new RemoveDOMStorageItemRequestBuilder();
	}
}
