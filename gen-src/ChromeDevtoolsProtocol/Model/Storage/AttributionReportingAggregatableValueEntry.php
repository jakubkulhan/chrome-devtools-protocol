<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.AttributionReportingAggregatableValueEntry.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingAggregatableValueEntry implements \JsonSerializable
{
	/** @var AttributionReportingAggregatableValueDictEntry[] */
	public $values;

	/** @var AttributionReportingFilterPair */
	public $filters;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->values)) {
			$instance->values = [];
			foreach ($data->values as $item) {
				$instance->values[] = AttributionReportingAggregatableValueDictEntry::fromJson($item);
			}
		}
		if (isset($data->filters)) {
			$instance->filters = AttributionReportingFilterPair::fromJson($data->filters);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->values !== null) {
			$data->values = [];
			foreach ($this->values as $item) {
				$data->values[] = $item->jsonSerialize();
			}
		}
		if ($this->filters !== null) {
			$data->filters = $this->filters->jsonSerialize();
		}
		return $data;
	}
}
