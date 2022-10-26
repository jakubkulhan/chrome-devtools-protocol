<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Response to Storage.getSharedStorageMetadata command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetSharedStorageMetadataResponse implements \JsonSerializable
{
	/** @var SharedStorageMetadata */
	public $metadata;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->metadata)) {
			$instance->metadata = SharedStorageMetadata::fromJson($data->metadata);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->metadata !== null) {
			$data->metadata = $this->metadata->jsonSerialize();
		}
		return $data;
	}
}
