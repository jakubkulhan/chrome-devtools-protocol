<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.AttributionReportingTriggerRegisteredEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingTriggerRegisteredEvent implements \JsonSerializable
{
	/** @var AttributionReportingTriggerRegistration */
	public $registration;

	/** @var string */
	public $eventLevel;

	/** @var string */
	public $aggregatable;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->registration)) {
			$instance->registration = AttributionReportingTriggerRegistration::fromJson($data->registration);
		}
		if (isset($data->eventLevel)) {
			$instance->eventLevel = (string)$data->eventLevel;
		}
		if (isset($data->aggregatable)) {
			$instance->aggregatable = (string)$data->aggregatable;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->registration !== null) {
			$data->registration = $this->registration->jsonSerialize();
		}
		if ($this->eventLevel !== null) {
			$data->eventLevel = $this->eventLevel;
		}
		if ($this->aggregatable !== null) {
			$data->aggregatable = $this->aggregatable;
		}
		return $data;
	}
}
