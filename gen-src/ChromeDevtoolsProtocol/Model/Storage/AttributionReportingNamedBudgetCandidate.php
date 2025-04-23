<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.AttributionReportingNamedBudgetCandidate.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingNamedBudgetCandidate implements \JsonSerializable
{
	/** @var string|null */
	public $name;

	/** @var AttributionReportingFilterPair */
	public $filters;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->filters)) {
			$instance->filters = AttributionReportingFilterPair::fromJson($data->filters);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->filters !== null) {
			$data->filters = $this->filters->jsonSerialize();
		}
		return $data;
	}
}
