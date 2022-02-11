<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Named type Network.CrossOriginOpenerPolicyStatus.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CrossOriginOpenerPolicyStatus implements \JsonSerializable
{
	/** @var string */
	public $value;

	/** @var string */
	public $reportOnlyValue;

	/** @var string|null */
	public $reportingEndpoint;

	/** @var string|null */
	public $reportOnlyReportingEndpoint;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->value)) {
			$instance->value = (string)$data->value;
		}
		if (isset($data->reportOnlyValue)) {
			$instance->reportOnlyValue = (string)$data->reportOnlyValue;
		}
		if (isset($data->reportingEndpoint)) {
			$instance->reportingEndpoint = (string)$data->reportingEndpoint;
		}
		if (isset($data->reportOnlyReportingEndpoint)) {
			$instance->reportOnlyReportingEndpoint = (string)$data->reportOnlyReportingEndpoint;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->value !== null) {
			$data->value = $this->value;
		}
		if ($this->reportOnlyValue !== null) {
			$data->reportOnlyValue = $this->reportOnlyValue;
		}
		if ($this->reportingEndpoint !== null) {
			$data->reportingEndpoint = $this->reportingEndpoint;
		}
		if ($this->reportOnlyReportingEndpoint !== null) {
			$data->reportOnlyReportingEndpoint = $this->reportOnlyReportingEndpoint;
		}
		return $data;
	}
}
