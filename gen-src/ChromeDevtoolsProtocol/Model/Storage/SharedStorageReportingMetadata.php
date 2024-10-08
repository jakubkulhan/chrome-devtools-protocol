<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Pair of reporting metadata details for a candidate URL for `selectURL()`.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SharedStorageReportingMetadata implements \JsonSerializable
{
	/** @var string */
	public $eventType;

	/** @var string */
	public $reportingUrl;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->eventType)) {
			$instance->eventType = (string)$data->eventType;
		}
		if (isset($data->reportingUrl)) {
			$instance->reportingUrl = (string)$data->reportingUrl;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->eventType !== null) {
			$data->eventType = $this->eventType;
		}
		if ($this->reportingUrl !== null) {
			$data->reportingUrl = $this->reportingUrl;
		}
		return $data;
	}
}
