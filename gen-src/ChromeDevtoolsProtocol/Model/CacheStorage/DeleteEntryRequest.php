<?php

namespace ChromeDevtoolsProtocol\Model\CacheStorage;

/**
 * Request for CacheStorage.deleteEntry command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DeleteEntryRequest implements \JsonSerializable
{
	/**
	 * Id of cache where the entry will be deleted.
	 *
	 * @var string
	 */
	public $cacheId;

	/**
	 * URL spec of the request.
	 *
	 * @var string
	 */
	public $request;


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
		if (isset($data->request)) {
			$instance->request = (string)$data->request;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->cacheId !== null) {
			$data->cacheId = $this->cacheId;
		}
		if ($this->request !== null) {
			$data->request = $this->request;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return DeleteEntryRequestBuilder
	 */
	public static function builder(): DeleteEntryRequestBuilder
	{
		return new DeleteEntryRequestBuilder();
	}
}
