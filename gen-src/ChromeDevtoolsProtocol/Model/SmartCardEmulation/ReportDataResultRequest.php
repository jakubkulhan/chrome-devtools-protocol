<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

/**
 * Request for SmartCardEmulation.reportDataResult command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReportDataResultRequest implements \JsonSerializable
{
	/** @var string */
	public $requestId;

	/** @var string */
	public $data;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->requestId)) {
			$instance->requestId = (string)$data->requestId;
		}
		if (isset($data->data)) {
			$instance->data = (string)$data->data;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->data !== null) {
			$data->data = $this->data;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ReportDataResultRequestBuilder
	 */
	public static function builder(): ReportDataResultRequestBuilder
	{
		return new ReportDataResultRequestBuilder();
	}
}
