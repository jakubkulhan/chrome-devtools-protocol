<?php

namespace ChromeDevtoolsProtocol\Model\CacheStorage;

/**
 * Request for CacheStorage.requestCacheNames command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestCacheNamesRequest implements \JsonSerializable
{
	/**
	 * Security origin.
	 *
	 * @var string
	 */
	public $securityOrigin;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->securityOrigin !== null) {
			$data->securityOrigin = $this->securityOrigin;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return RequestCacheNamesRequestBuilder
	 */
	public static function builder(): RequestCacheNamesRequestBuilder
	{
		return new RequestCacheNamesRequestBuilder();
	}
}
