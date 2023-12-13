<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.AttributionReportingFilterPair.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingFilterPair implements \JsonSerializable
{
	/** @var AttributionReportingFilterConfig[] */
	public $filters;

	/** @var AttributionReportingFilterConfig[] */
	public $notFilters;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->filters)) {
			$instance->filters = [];
			foreach ($data->filters as $item) {
				$instance->filters[] = AttributionReportingFilterConfig::fromJson($item);
			}
		}
		if (isset($data->notFilters)) {
			$instance->notFilters = [];
			foreach ($data->notFilters as $item) {
				$instance->notFilters[] = AttributionReportingFilterConfig::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->filters !== null) {
			$data->filters = [];
			foreach ($this->filters as $item) {
				$data->filters[] = $item->jsonSerialize();
			}
		}
		if ($this->notFilters !== null) {
			$data->notFilters = [];
			foreach ($this->notFilters as $item) {
				$data->notFilters[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
