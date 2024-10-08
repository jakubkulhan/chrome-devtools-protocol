<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Named type Network.ReportingApiReportUpdatedEvent.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReportingApiReportUpdatedEvent implements \JsonSerializable
{
	/** @var ReportingApiReport */
	public $report;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->report)) {
			$instance->report = ReportingApiReport::fromJson($data->report);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->report !== null) {
			$data->report = $this->report->jsonSerialize();
		}
		return $data;
	}
}
