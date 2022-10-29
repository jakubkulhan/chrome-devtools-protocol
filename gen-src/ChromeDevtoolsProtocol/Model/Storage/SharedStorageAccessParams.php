<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Bundles the parameters for shared storage access events whose presence/absence can vary according to SharedStorageAccessType.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SharedStorageAccessParams implements \JsonSerializable
{
	/**
	 * Spec of the module script URL. Present only for SharedStorageAccessType.documentAddModule.
	 *
	 * @var string|null
	 */
	public $scriptSourceUrl;

	/**
	 * Name of the registered operation to be run. Present only for SharedStorageAccessType.documentRun and SharedStorageAccessType.documentSelectURL.
	 *
	 * @var string|null
	 */
	public $operationName;

	/**
	 * The operation's serialized data in bytes (converted to a string). Present only for SharedStorageAccessType.documentRun and SharedStorageAccessType.documentSelectURL.
	 *
	 * @var string|null
	 */
	public $serializedData;

	/**
	 * Array of candidate URLs' specs, along with any associated metadata. Present only for SharedStorageAccessType.documentSelectURL.
	 *
	 * @var SharedStorageUrlWithMetadata[]|null
	 */
	public $urlsWithMetadata;

	/**
	 * Key for a specific entry in an origin's shared storage. Present only for SharedStorageAccessType.documentSet, SharedStorageAccessType.documentAppend, SharedStorageAccessType.documentDelete, SharedStorageAccessType.workletSet, SharedStorageAccessType.workletAppend, SharedStorageAccessType.workletDelete, and SharedStorageAccessType.workletGet.
	 *
	 * @var string|null
	 */
	public $key;

	/**
	 * Value for a specific entry in an origin's shared storage. Present only for SharedStorageAccessType.documentSet, SharedStorageAccessType.documentAppend, SharedStorageAccessType.workletSet, and SharedStorageAccessType.workletAppend.
	 *
	 * @var string|null
	 */
	public $value;

	/**
	 * Whether or not to set an entry for a key if that key is already present. Present only for SharedStorageAccessType.documentSet and SharedStorageAccessType.workletSet.
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
		if (isset($data->scriptSourceUrl)) {
			$instance->scriptSourceUrl = (string)$data->scriptSourceUrl;
		}
		if (isset($data->operationName)) {
			$instance->operationName = (string)$data->operationName;
		}
		if (isset($data->serializedData)) {
			$instance->serializedData = (string)$data->serializedData;
		}
		if (isset($data->urlsWithMetadata)) {
			$instance->urlsWithMetadata = [];
			foreach ($data->urlsWithMetadata as $item) {
				$instance->urlsWithMetadata[] = SharedStorageUrlWithMetadata::fromJson($item);
			}
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
		if ($this->scriptSourceUrl !== null) {
			$data->scriptSourceUrl = $this->scriptSourceUrl;
		}
		if ($this->operationName !== null) {
			$data->operationName = $this->operationName;
		}
		if ($this->serializedData !== null) {
			$data->serializedData = $this->serializedData;
		}
		if ($this->urlsWithMetadata !== null) {
			$data->urlsWithMetadata = [];
			foreach ($this->urlsWithMetadata as $item) {
				$data->urlsWithMetadata[] = $item->jsonSerialize();
			}
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
}
