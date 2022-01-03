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
	 * @var string
	 */
	public $securityOrigin;

	/**
	 * Whether the storage is local storage (not session storage).
	 *
	 * @var bool
	 */
	public $isLocalStorage;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->securityOrigin)) {
			$instance->securityOrigin = (string)$data->securityOrigin;
		}
		if (isset($data->isLocalStorage)) {
			$instance->isLocalStorage = (bool)$data->isLocalStorage;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->securityOrigin !== null) {
			$data->securityOrigin = $this->securityOrigin;
		}
		if ($this->isLocalStorage !== null) {
			$data->isLocalStorage = $this->isLocalStorage;
		}
		return $data;
	}
}
