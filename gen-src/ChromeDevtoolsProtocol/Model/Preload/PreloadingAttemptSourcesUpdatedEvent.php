<?php

namespace ChromeDevtoolsProtocol\Model\Preload;

/**
 * Send a list of sources for all preloading attempts.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PreloadingAttemptSourcesUpdatedEvent implements \JsonSerializable
{
	/** @var PreloadingAttemptSource[] */
	public $preloadingAttemptSources;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->preloadingAttemptSources)) {
			$instance->preloadingAttemptSources = [];
			foreach ($data->preloadingAttemptSources as $item) {
				$instance->preloadingAttemptSources[] = PreloadingAttemptSource::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->preloadingAttemptSources !== null) {
			$data->preloadingAttemptSources = [];
			foreach ($this->preloadingAttemptSources as $item) {
				$data->preloadingAttemptSources[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
