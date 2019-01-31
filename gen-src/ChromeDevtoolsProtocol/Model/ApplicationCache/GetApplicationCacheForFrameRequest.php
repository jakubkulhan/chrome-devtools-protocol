<?php

namespace ChromeDevtoolsProtocol\Model\ApplicationCache;

/**
 * Request for ApplicationCache.getApplicationCacheForFrame command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetApplicationCacheForFrameRequest implements \JsonSerializable
{
	/**
	 * Identifier of the frame containing document whose application cache is retrieved.
	 *
	 * @var string
	 */
	public $frameId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameId)) {
			$instance->frameId = (string)$data->frameId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameId !== null) {
			$data->frameId = $this->frameId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetApplicationCacheForFrameRequestBuilder
	 */
	public static function builder(): GetApplicationCacheForFrameRequestBuilder
	{
		return new GetApplicationCacheForFrameRequestBuilder();
	}
}
