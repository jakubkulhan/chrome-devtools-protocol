<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Bundles a candidate URL with its reporting metadata.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SharedStorageUrlWithMetadata implements \JsonSerializable
{
	/**
	 * Spec of candidate URL.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * Any associated reporting metadata.
	 *
	 * @var SharedStorageReportingMetadata[]
	 */
	public $reportingMetadata;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->url)) {
			$instance->url = (string)$data->url;
		}
		if (isset($data->reportingMetadata)) {
			$instance->reportingMetadata = [];
			foreach ($data->reportingMetadata as $item) {
				$instance->reportingMetadata[] = SharedStorageReportingMetadata::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->url !== null) {
			$data->url = $this->url;
		}
		if ($this->reportingMetadata !== null) {
			$data->reportingMetadata = [];
			foreach ($this->reportingMetadata as $item) {
				$data->reportingMetadata[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
