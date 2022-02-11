<?php

namespace ChromeDevtoolsProtocol\Model\CacheStorage;

/**
 * Cache identifier.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class Cache implements \JsonSerializable
{
	/**
	 * An opaque unique id of the cache.
	 *
	 * @var string
	 */
	public $cacheId;

	/**
	 * Security origin of the cache.
	 *
	 * @var string
	 */
	public $securityOrigin;

	/**
	 * The name of the cache.
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
		if (isset($data->cacheId)) {
			$instance->cacheId = (string)$data->cacheId;
		}
		if (isset($data->securityOrigin)) {
			$instance->securityOrigin = (string)$data->securityOrigin;
		}
		if (isset($data->cacheName)) {
			$instance->cacheName = (string)$data->cacheName;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->cacheId !== null) {
			$data->cacheId = $this->cacheId;
		}
		if ($this->securityOrigin !== null) {
			$data->securityOrigin = $this->securityOrigin;
		}
		if ($this->cacheName !== null) {
			$data->cacheName = $this->cacheName;
		}
		return $data;
	}
}
