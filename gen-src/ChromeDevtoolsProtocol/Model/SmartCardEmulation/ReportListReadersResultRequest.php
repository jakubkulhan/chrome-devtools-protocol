<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

/**
 * Request for SmartCardEmulation.reportListReadersResult command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReportListReadersResultRequest implements \JsonSerializable
{
	/** @var string */
	public $requestId;

	/** @var string[] */
	public $readers;


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
		if (isset($data->readers)) {
			$instance->readers = [];
			foreach ($data->readers as $item) {
				$instance->readers[] = (string)$item;
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->readers !== null) {
			$data->readers = [];
			foreach ($this->readers as $item) {
				$data->readers[] = $item;
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ReportListReadersResultRequestBuilder
	 */
	public static function builder(): ReportListReadersResultRequestBuilder
	{
		return new ReportListReadersResultRequestBuilder();
	}
}
