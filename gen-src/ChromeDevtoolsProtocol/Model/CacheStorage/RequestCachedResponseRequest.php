<?php
namespace ChromeDevtoolsProtocol\Model\CacheStorage;

/**
 * Request for CacheStorage.requestCachedResponse command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class RequestCachedResponseRequest implements \JsonSerializable
{
	/**
	 * Id of cache that contains the entry.
	 *
	 * @var string
	 */
	public $cacheId;

	/**
	 * URL spec of the request.
	 *
	 * @var string
	 */
	public $requestURL;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->cacheId)) {
			$instance->cacheId = (string)$data->cacheId;
		}
		if (isset($data->requestURL)) {
			$instance->requestURL = (string)$data->requestURL;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->cacheId !== null) {
			$data->cacheId = $this->cacheId;
		}
		if ($this->requestURL !== null) {
			$data->requestURL = $this->requestURL;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return RequestCachedResponseRequestBuilder
	 */
	public static function builder(): RequestCachedResponseRequestBuilder
	{
		return new RequestCachedResponseRequestBuilder();
	}
}
