<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Request for Storage.setSharedStorageEntry command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetSharedStorageEntryRequest implements \JsonSerializable
{
	/** @var string */
	public $ownerOrigin;

	/** @var string */
	public $key;

	/** @var string */
	public $value;

	/**
	 * If `ignoreIfPresent` is included and true, then only sets the entry if `key` doesn't already exist.
	 *
	 * @var bool|null
	 */
	public $ignoreIfPresent;


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
		if (isset($data->value)) {
			$instance->value = (string)$data->value;
		}
		if (isset($data->ignoreIfPresent)) {
			$instance->ignoreIfPresent = (bool)$data->ignoreIfPresent;
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
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		if ($this->ignoreIfPresent !== null) {
			$data->ignoreIfPresent = $this->ignoreIfPresent;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetSharedStorageEntryRequestBuilder
	 */
	public static function builder(): SetSharedStorageEntryRequestBuilder
	{
		return new SetSharedStorageEntryRequestBuilder();
	}
}
