<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

/**
 * Request for SmartCardEmulation.reportConnectResult command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReportConnectResultRequest implements \JsonSerializable
{
	/** @var string */
	public $requestId;

	/** @var int */
	public $handle;

	/** @var string */
	public $activeProtocol;


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
		if (isset($data->handle)) {
			$instance->handle = (int)$data->handle;
		}
		if (isset($data->activeProtocol)) {
			$instance->activeProtocol = (string)$data->activeProtocol;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->handle !== null) {
			$data->handle = $this->handle;
		}
		if ($this->activeProtocol !== null) {
			$data->activeProtocol = $this->activeProtocol;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ReportConnectResultRequestBuilder
	 */
	public static function builder(): ReportConnectResultRequestBuilder
	{
		return new ReportConnectResultRequestBuilder();
	}
}
