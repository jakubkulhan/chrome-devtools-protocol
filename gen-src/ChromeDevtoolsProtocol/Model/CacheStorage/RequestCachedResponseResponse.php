<?php

namespace ChromeDevtoolsProtocol\Model\CacheStorage;

/**
 * Response to CacheStorage.requestCachedResponse command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestCachedResponseResponse implements \JsonSerializable
{
	/**
	 * Response read from the cache.
	 *
	 * @var CachedResponse
	 */
	public $response;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->response)) {
			$instance->response = CachedResponse::fromJson($data->response);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->response !== null) {
			$data->response = $this->response->jsonSerialize();
		}
		return $data;
	}
}
