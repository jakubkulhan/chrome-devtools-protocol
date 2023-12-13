<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.AttributionReportingTriggerRegistration.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingTriggerRegistration implements \JsonSerializable
{
	/** @var AttributionReportingFilterPair */
	public $filters;

	/** @var string */
	public $debugKey;

	/** @var AttributionReportingAggregatableDedupKey[] */
	public $aggregatableDedupKeys;

	/** @var AttributionReportingEventTriggerData[] */
	public $eventTriggerData;

	/** @var AttributionReportingAggregatableTriggerData[] */
	public $aggregatableTriggerData;

	/** @var AttributionReportingAggregatableValueEntry[] */
	public $aggregatableValues;

	/** @var bool */
	public $debugReporting;

	/** @var string|null */
	public $aggregationCoordinatorOrigin;

	/** @var string */
	public $sourceRegistrationTimeConfig;

	/** @var string|null */
	public $triggerContextId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->filters)) {
			$instance->filters = AttributionReportingFilterPair::fromJson($data->filters);
		}
		if (isset($data->debugKey)) {
			$instance->debugKey = (string)$data->debugKey;
		}
		if (isset($data->aggregatableDedupKeys)) {
			$instance->aggregatableDedupKeys = [];
			foreach ($data->aggregatableDedupKeys as $item) {
				$instance->aggregatableDedupKeys[] = AttributionReportingAggregatableDedupKey::fromJson($item);
			}
		}
		if (isset($data->eventTriggerData)) {
			$instance->eventTriggerData = [];
			foreach ($data->eventTriggerData as $item) {
				$instance->eventTriggerData[] = AttributionReportingEventTriggerData::fromJson($item);
			}
		}
		if (isset($data->aggregatableTriggerData)) {
			$instance->aggregatableTriggerData = [];
			foreach ($data->aggregatableTriggerData as $item) {
				$instance->aggregatableTriggerData[] = AttributionReportingAggregatableTriggerData::fromJson($item);
			}
		}
		if (isset($data->aggregatableValues)) {
			$instance->aggregatableValues = [];
			foreach ($data->aggregatableValues as $item) {
				$instance->aggregatableValues[] = AttributionReportingAggregatableValueEntry::fromJson($item);
			}
		}
		if (isset($data->debugReporting)) {
			$instance->debugReporting = (bool)$data->debugReporting;
		}
		if (isset($data->aggregationCoordinatorOrigin)) {
			$instance->aggregationCoordinatorOrigin = (string)$data->aggregationCoordinatorOrigin;
		}
		if (isset($data->sourceRegistrationTimeConfig)) {
			$instance->sourceRegistrationTimeConfig = (string)$data->sourceRegistrationTimeConfig;
		}
		if (isset($data->triggerContextId)) {
			$instance->triggerContextId = (string)$data->triggerContextId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->filters !== null) {
			$data->filters = $this->filters->jsonSerialize();
		}
		if ($this->debugKey !== null) {
			$data->debugKey = $this->debugKey;
		}
		if ($this->aggregatableDedupKeys !== null) {
			$data->aggregatableDedupKeys = [];
			foreach ($this->aggregatableDedupKeys as $item) {
				$data->aggregatableDedupKeys[] = $item->jsonSerialize();
			}
		}
		if ($this->eventTriggerData !== null) {
			$data->eventTriggerData = [];
			foreach ($this->eventTriggerData as $item) {
				$data->eventTriggerData[] = $item->jsonSerialize();
			}
		}
		if ($this->aggregatableTriggerData !== null) {
			$data->aggregatableTriggerData = [];
			foreach ($this->aggregatableTriggerData as $item) {
				$data->aggregatableTriggerData[] = $item->jsonSerialize();
			}
		}
		if ($this->aggregatableValues !== null) {
			$data->aggregatableValues = [];
			foreach ($this->aggregatableValues as $item) {
				$data->aggregatableValues[] = $item->jsonSerialize();
			}
		}
		if ($this->debugReporting !== null) {
			$data->debugReporting = $this->debugReporting;
		}
		if ($this->aggregationCoordinatorOrigin !== null) {
			$data->aggregationCoordinatorOrigin = $this->aggregationCoordinatorOrigin;
		}
		if ($this->sourceRegistrationTimeConfig !== null) {
			$data->sourceRegistrationTimeConfig = $this->sourceRegistrationTimeConfig;
		}
		if ($this->triggerContextId !== null) {
			$data->triggerContextId = $this->triggerContextId;
		}
		return $data;
	}
}
