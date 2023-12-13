<?php

namespace ChromeDevtoolsProtocol\Model\Storage;

/**
 * Named type Storage.AttributionReportingSourceRegisteredEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AttributionReportingSourceRegisteredEvent implements \JsonSerializable
{
	/** @var AttributionReportingSourceRegistration */
	public $registration;

	/** @var string */
	public $result;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->registration)) {
			$instance->registration = AttributionReportingSourceRegistration::fromJson($data->registration);
		}
		if (isset($data->result)) {
			$instance->result = (string)$data->result;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->registration !== null) {
			$data->registration = $this->registration->jsonSerialize();
		}
		if ($this->result !== null) {
			$data->result = $this->result;
		}
		return $data;
	}
}
