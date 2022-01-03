<?php

namespace ChromeDevtoolsProtocol\Model\DOMStorage;

/**
 * Named type DOMStorage.DomStorageItemsClearedEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DomStorageItemsClearedEvent implements \JsonSerializable
{
	/** @var StorageId */
	public $storageId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->storageId)) {
			$instance->storageId = StorageId::fromJson($data->storageId);
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->storageId !== null) {
			$data->storageId = $this->storageId->jsonSerialize();
		}
		return $data;
	}
}
