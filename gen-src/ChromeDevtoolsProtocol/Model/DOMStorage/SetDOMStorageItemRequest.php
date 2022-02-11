<?php

namespace ChromeDevtoolsProtocol\Model\DOMStorage;

/**
 * Request for DOMStorage.setDOMStorageItem command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDOMStorageItemRequest implements \JsonSerializable
{
	/** @var StorageId */
	public $storageId;

	/** @var string */
	public $key;

	/** @var string */
	public $value;


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
		if (isset($data->key)) {
			$instance->key = (string)$data->key;
		}
		if (isset($data->value)) {
			$instance->value = (string)$data->value;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->storageId !== null) {
			$data->storageId = $this->storageId->jsonSerialize();
		}
		if ($this->key !== null) {
			$data->key = $this->key;
		}
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetDOMStorageItemRequestBuilder
	 */
	public static function builder(): SetDOMStorageItemRequestBuilder
	{
		return new SetDOMStorageItemRequestBuilder();
	}
}
