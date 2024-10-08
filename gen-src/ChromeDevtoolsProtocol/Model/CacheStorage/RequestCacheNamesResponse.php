<?php

namespace ChromeDevtoolsProtocol\Model\CacheStorage;

/**
 * Response to CacheStorage.requestCacheNames command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestCacheNamesResponse implements \JsonSerializable
{
	/**
	 * Caches for the security origin.
	 *
	 * @var Cache[]
	 */
	public $caches;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->caches)) {
			$instance->caches = [];
			foreach ($data->caches as $item) {
				$instance->caches[] = Cache::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->caches !== null) {
			$data->caches = [];
			foreach ($this->caches as $item) {
				$data->caches[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
