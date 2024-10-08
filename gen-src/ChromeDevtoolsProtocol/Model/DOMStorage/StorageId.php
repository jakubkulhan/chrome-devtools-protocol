<?php

namespace ChromeDevtoolsProtocol\Model\DOMStorage;

/**
 * DOM Storage identifier.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class StorageId implements \JsonSerializable
{
	/**
	 * Security origin for the storage.
	 *
	 * @var string|null
	 */
	public $securityOrigin;

	/**
	 * Represents a key by which DOM Storage keys its CachedStorageAreas
	 *
	 * @var string
	 */
	public $storageKey;

	/**
	 * Whether the storage is local storage (not session storage).
	 *
	 * @var bool
	 */
	public $isLocalStorage;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->securityOrigin)) {
			$instance->securityOrigin = (string)$data->securityOrigin;
		}
		if (isset($data->storageKey)) {
			$instance->storageKey = (string)$data->storageKey;
		}
		if (isset($data->isLocalStorage)) {
			$instance->isLocalStorage = (bool)$data->isLocalStorage;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->securityOrigin !== null) {
			$data->securityOrigin = $this->securityOrigin;
		}
		if ($this->storageKey !== null) {
			$data->storageKey = $this->storageKey;
		}
		if ($this->isLocalStorage !== null) {
			$data->isLocalStorage = $this->isLocalStorage;
		}
		return $data;
	}
}
