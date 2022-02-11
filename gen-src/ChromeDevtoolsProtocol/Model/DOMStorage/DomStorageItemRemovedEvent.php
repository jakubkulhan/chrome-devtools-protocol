<?php

namespace ChromeDevtoolsProtocol\Model\DOMStorage;

/**
 * Named type DOMStorage.DomStorageItemRemovedEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DomStorageItemRemovedEvent implements \JsonSerializable
{
	/** @var StorageId */
	public $storageId;

	/** @var string */
	public $key;


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
		return $data;
	}
}
