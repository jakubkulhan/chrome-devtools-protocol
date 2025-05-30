<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.AttributionReportingSourceRegistration.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingSourceRegistration implements \JsonSerializable
{
	/** @var int|float */
	public $time;

	/**
	 * duration in seconds
	 *
	 * @var int
	 */
	public $expiry;

	/**
	 * number instead of integer because not all uint32 can be represented by int
	 *
	 * @var int[]|float[]
	 */
	public $triggerData;

	/** @var AttributionReportingEventReportWindows */
	public $eventReportWindows;

	/**
	 * duration in seconds
	 *
	 * @var int
	 */
	public $aggregatableReportWindow;

	/** @var string */
	public $type;

	/** @var string */
	public $sourceOrigin;

	/** @var string */
	public $reportingOrigin;

	/** @var string[] */
	public $destinationSites;

	/** @var string */
	public $eventId;

	/** @var string */
	public $priority;

	/** @var AttributionReportingFilterDataEntry[] */
	public $filterData;

	/** @var AttributionReportingAggregationKeysEntry[] */
	public $aggregationKeys;

	/** @var string */
	public $debugKey;

	/** @var string */
	public $triggerDataMatching;

	/** @var string */
	public $destinationLimitPriority;

	/** @var AttributionReportingAggregatableDebugReportingConfig */
	public $aggregatableDebugReportingConfig;

	/** @var AttributionScopesData|null */
	public $scopesData;

	/** @var int */
	public $maxEventLevelReports;

	/** @var AttributionReportingNamedBudgetDef[] */
	public $namedBudgets;

	/** @var bool */
	public $debugReporting;

	/** @var int|float */
	public $eventLevelEpsilon;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->time)) {
			$instance->time = $data->time;
		}
		if (isset($data->expiry)) {
			$instance->expiry = (int)$data->expiry;
		}
		if (isset($data->triggerData)) {
			$instance->triggerData = [];
			foreach ($data->triggerData as $item) {
				$instance->triggerData[] = $item;
			}
		}
		if (isset($data->eventReportWindows)) {
			$instance->eventReportWindows = AttributionReportingEventReportWindows::fromJson($data->eventReportWindows);
		}
		if (isset($data->aggregatableReportWindow)) {
			$instance->aggregatableReportWindow = (int)$data->aggregatableReportWindow;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->sourceOrigin)) {
			$instance->sourceOrigin = (string)$data->sourceOrigin;
		}
		if (isset($data->reportingOrigin)) {
			$instance->reportingOrigin = (string)$data->reportingOrigin;
		}
		if (isset($data->destinationSites)) {
			$instance->destinationSites = [];
			foreach ($data->destinationSites as $item) {
				$instance->destinationSites[] = (string)$item;
			}
		}
		if (isset($data->eventId)) {
			$instance->eventId = (string)$data->eventId;
		}
		if (isset($data->priority)) {
			$instance->priority = (string)$data->priority;
		}
		if (isset($data->filterData)) {
			$instance->filterData = [];
			foreach ($data->filterData as $item) {
				$instance->filterData[] = AttributionReportingFilterDataEntry::fromJson($item);
			}
		}
		if (isset($data->aggregationKeys)) {
			$instance->aggregationKeys = [];
			foreach ($data->aggregationKeys as $item) {
				$instance->aggregationKeys[] = AttributionReportingAggregationKeysEntry::fromJson($item);
			}
		}
		if (isset($data->debugKey)) {
			$instance->debugKey = (string)$data->debugKey;
		}
		if (isset($data->triggerDataMatching)) {
			$instance->triggerDataMatching = (string)$data->triggerDataMatching;
		}
		if (isset($data->destinationLimitPriority)) {
			$instance->destinationLimitPriority = (string)$data->destinationLimitPriority;
		}
		if (isset($data->aggregatableDebugReportingConfig)) {
			$instance->aggregatableDebugReportingConfig = AttributionReportingAggregatableDebugReportingConfig::fromJson($data->aggregatableDebugReportingConfig);
		}
		if (isset($data->scopesData)) {
			$instance->scopesData = AttributionScopesData::fromJson($data->scopesData);
		}
		if (isset($data->maxEventLevelReports)) {
			$instance->maxEventLevelReports = (int)$data->maxEventLevelReports;
		}
		if (isset($data->namedBudgets)) {
			$instance->namedBudgets = [];
			foreach ($data->namedBudgets as $item) {
				$instance->namedBudgets[] = AttributionReportingNamedBudgetDef::fromJson($item);
			}
		}
		if (isset($data->debugReporting)) {
			$instance->debugReporting = (bool)$data->debugReporting;
		}
		if (isset($data->eventLevelEpsilon)) {
			$instance->eventLevelEpsilon = $data->eventLevelEpsilon;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->time !== null) {
			$data->time = $this->time;
		}
		if ($this->expiry !== null) {
			$data->expiry = $this->expiry;
		}
		if ($this->triggerData !== null) {
			$data->triggerData = [];
			foreach ($this->triggerData as $item) {
				$data->triggerData[] = $item;
			}
		}
		if ($this->eventReportWindows !== null) {
			$data->eventReportWindows = $this->eventReportWindows->jsonSerialize();
		}
		if ($this->aggregatableReportWindow !== null) {
			$data->aggregatableReportWindow = $this->aggregatableReportWindow;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->sourceOrigin !== null) {
			$data->sourceOrigin = $this->sourceOrigin;
		}
		if ($this->reportingOrigin !== null) {
			$data->reportingOrigin = $this->reportingOrigin;
		}
		if ($this->destinationSites !== null) {
			$data->destinationSites = [];
			foreach ($this->destinationSites as $item) {
				$data->destinationSites[] = $item;
			}
		}
		if ($this->eventId !== null) {
			$data->eventId = $this->eventId;
		}
		if ($this->priority !== null) {
			$data->priority = $this->priority;
		}
		if ($this->filterData !== null) {
			$data->filterData = [];
			foreach ($this->filterData as $item) {
				$data->filterData[] = $item->jsonSerialize();
			}
		}
		if ($this->aggregationKeys !== null) {
			$data->aggregationKeys = [];
			foreach ($this->aggregationKeys as $item) {
				$data->aggregationKeys[] = $item->jsonSerialize();
			}
		}
		if ($this->debugKey !== null) {
			$data->debugKey = $this->debugKey;
		}
		if ($this->triggerDataMatching !== null) {
			$data->triggerDataMatching = $this->triggerDataMatching;
		}
		if ($this->destinationLimitPriority !== null) {
			$data->destinationLimitPriority = $this->destinationLimitPriority;
		}
		if ($this->aggregatableDebugReportingConfig !== null) {
			$data->aggregatableDebugReportingConfig = $this->aggregatableDebugReportingConfig->jsonSerialize();
		}
		if ($this->scopesData !== null) {
			$data->scopesData = $this->scopesData->jsonSerialize();
		}
		if ($this->maxEventLevelReports !== null) {
			$data->maxEventLevelReports = $this->maxEventLevelReports;
		}
		if ($this->namedBudgets !== null) {
			$data->namedBudgets = [];
			foreach ($this->namedBudgets as $item) {
				$data->namedBudgets[] = $item->jsonSerialize();
			}
		}
		if ($this->debugReporting !== null) {
			$data->debugReporting = $this->debugReporting;
		}
		if ($this->eventLevelEpsilon !== null) {
			$data->eventLevelEpsilon = $this->eventLevelEpsilon;
		}
		return $data;
	}
}
