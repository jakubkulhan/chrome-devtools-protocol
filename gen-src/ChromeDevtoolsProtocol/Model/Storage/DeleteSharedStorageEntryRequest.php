<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Request for Storage.deleteSharedStorageEntry command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeleteSharedStorageEntryRequest implements \JsonSerializable
{
	/** @var string */
	public $ownerOrigin;

	/** @var string */
	public $key;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->ownerOrigin)) {
			$instance->ownerOrigin = (string)$data->ownerOrigin;
		}
		if (isset($data->key)) {
			$instance->key = (string)$data->key;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->ownerOrigin !== null) {
			$data->ownerOrigin = $this->ownerOrigin;
		}
		if ($this->key !== null) {
			$data->key = $this->key;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return DeleteSharedStorageEntryRequestBuilder
	 */
	public static function builder(): DeleteSharedStorageEntryRequestBuilder
	{
		return new DeleteSharedStorageEntryRequestBuilder();
	}
}
