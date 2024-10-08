<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.AttributionReportingFilterConfig.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingFilterConfig implements \JsonSerializable
{
	/** @var AttributionReportingFilterDataEntry[] */
	public $filterValues;

	/**
	 * duration in seconds
	 *
	 * @var int|null
	 */
	public $lookbackWindow;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->filterValues)) {
			$instance->filterValues = [];
			foreach ($data->filterValues as $item) {
				$instance->filterValues[] = AttributionReportingFilterDataEntry::fromJson($item);
			}
		}
		if (isset($data->lookbackWindow)) {
			$instance->lookbackWindow = (int)$data->lookbackWindow;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->filterValues !== null) {
			$data->filterValues = [];
			foreach ($this->filterValues as $item) {
				$data->filterValues[] = $item->jsonSerialize();
			}
		}
		if ($this->lookbackWindow !== null) {
			$data->lookbackWindow = $this->lookbackWindow;
		}
		return $data;
	}
}
