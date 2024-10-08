<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.AttributionReportingAggregatableDebugReportingConfig.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingAggregatableDebugReportingConfig implements \JsonSerializable
{
	/**
	 * number instead of integer because not all uint32 can be represented by int, only present for source registrations
	 *
	 * @var int|float|null
	 */
	public $budget;

	/** @var string */
	public $keyPiece;

	/** @var AttributionReportingAggregatableDebugReportingData[] */
	public $debugData;

	/** @var string|null */
	public $aggregationCoordinatorOrigin;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->budget)) {
			$instance->budget = $data->budget;
		}
		if (isset($data->keyPiece)) {
			$instance->keyPiece = (string)$data->keyPiece;
		}
		if (isset($data->debugData)) {
			$instance->debugData = [];
			foreach ($data->debugData as $item) {
				$instance->debugData[] = AttributionReportingAggregatableDebugReportingData::fromJson($item);
			}
		}
		if (isset($data->aggregationCoordinatorOrigin)) {
			$instance->aggregationCoordinatorOrigin = (string)$data->aggregationCoordinatorOrigin;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->budget !== null) {
			$data->budget = $this->budget;
		}
		if ($this->keyPiece !== null) {
			$data->keyPiece = $this->keyPiece;
		}
		if ($this->debugData !== null) {
			$data->debugData = [];
			foreach ($this->debugData as $item) {
				$data->debugData[] = $item->jsonSerialize();
			}
		}
		if ($this->aggregationCoordinatorOrigin !== null) {
			$data->aggregationCoordinatorOrigin = $this->aggregationCoordinatorOrigin;
		}
		return $data;
	}
}
