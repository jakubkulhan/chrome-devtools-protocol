<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Request for Storage.getStorageKey command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetStorageKeyRequest implements \JsonSerializable
{
	/** @var string */
	public $frameId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetStorageKeyRequestBuilder
	 */
	public static function builder(): GetStorageKeyRequestBuilder
	{
		return new GetStorageKeyRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
