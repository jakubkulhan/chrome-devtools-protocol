<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * A cache's contents have been modified.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CacheStorageContentUpdatedEvent implements \JsonSerializable
{
	/**
	 * Origin to update.
	 *
	 * @var string
	 */
	public $origin;

	/**
	 * Name of cache in origin.
	 *
	 * @var string
	 */
	public $cacheName;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->origin)) {
			$instance->origin = (string)$data->origin;
		}
		if (isset($data->cacheName)) {
			$instance->cacheName = (string)$data->cacheName;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->origin !== null) {
			$data->origin = $this->origin;
		}
		if ($this->cacheName !== null) {
			$data->cacheName = $this->cacheName;
		}
		return $data;
	}
}
