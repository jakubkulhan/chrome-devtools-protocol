<?php

namespace ChromeDevtoolsProtocol\Model\CacheStorage;

/**
 * Request for CacheStorage.deleteCache command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeleteCacheRequest implements \JsonSerializable
{
	/**
	 * Id of cache for deletion.
	 *
	 * @var string
	 */
	public $cacheId;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->cacheId !== null) {
			$data->cacheId = $this->cacheId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return DeleteCacheRequestBuilder
	 */
	public static function builder(): DeleteCacheRequestBuilder
	{
		return new DeleteCacheRequestBuilder();
	}
}
