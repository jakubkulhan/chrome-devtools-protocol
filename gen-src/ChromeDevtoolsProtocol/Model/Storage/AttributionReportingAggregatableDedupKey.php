<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.AttributionReportingAggregatableDedupKey.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingAggregatableDedupKey implements \JsonSerializable
{
	/** @var string */
	public $dedupKey;

	/** @var AttributionReportingFilterPair */
	public $filters;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->dedupKey)) {
			$instance->dedupKey = (string)$data->dedupKey;
		}
		if (isset($data->filters)) {
			$instance->filters = AttributionReportingFilterPair::fromJson($data->filters);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->dedupKey !== null) {
			$data->dedupKey = $this->dedupKey;
		}
		if ($this->filters !== null) {
			$data->filters = $this->filters->jsonSerialize();
		}
		return $data;
	}
}
