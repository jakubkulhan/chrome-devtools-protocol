<?php

namespace ChromeDevtoolsProtocol\Model\ApplicationCache;

/**
 * Response to ApplicationCache.getApplicationCacheForFrame command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetApplicationCacheForFrameResponse implements \JsonSerializable
{
	/**
	 * Relevant application cache data for the document in given frame.
	 *
	 * @var ApplicationCache
	 */
	public $applicationCache;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->applicationCache)) {
			$instance->applicationCache = ApplicationCache::fromJson($data->applicationCache);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->applicationCache !== null) {
			$data->applicationCache = $this->applicationCache->jsonSerialize();
		}
		return $data;
	}
}
