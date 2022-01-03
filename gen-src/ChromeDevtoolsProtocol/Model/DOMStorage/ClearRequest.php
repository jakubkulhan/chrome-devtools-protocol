<?php

namespace ChromeDevtoolsProtocol\Model\DOMStorage;

/**
 * Request for DOMStorage.clear command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ClearRequest implements \JsonSerializable
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


	/**
	 * Create new instance using builder.
	 *
	 * @return ClearRequestBuilder
	 */
	public static function builder(): ClearRequestBuilder
	{
		return new ClearRequestBuilder();
	}
}
