<?php

namespace ChromeDevtoolsProtocol\Model\ApplicationCache;

/**
 * Response to ApplicationCache.getFramesWithManifests command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetFramesWithManifestsResponse implements \JsonSerializable
{
	/**
	 * Array of frame identifiers with manifest urls for each frame containing a document associated with some application cache.
	 *
	 * @var FrameWithManifest[]
	 */
	public $frameIds;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->frameIds)) {
			$instance->frameIds = [];
			foreach ($data->frameIds as $item) {
				$instance->frameIds[] = FrameWithManifest::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->frameIds !== null) {
			$data->frameIds = [];
			foreach ($this->frameIds as $item) {
				$data->frameIds[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
