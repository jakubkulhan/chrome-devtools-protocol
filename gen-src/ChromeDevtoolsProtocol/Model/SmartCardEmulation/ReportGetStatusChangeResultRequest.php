<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

/**
 * Request for SmartCardEmulation.reportGetStatusChangeResult command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReportGetStatusChangeResultRequest implements \JsonSerializable
{
	/** @var string */
	public $requestId;

	/** @var ReaderStateOut[] */
	public $readerStates;


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
		if (isset($data->readerStates)) {
			$instance->readerStates = [];
			foreach ($data->readerStates as $item) {
				$instance->readerStates[] = ReaderStateOut::fromJson($item);
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
		if ($this->readerStates !== null) {
			$data->readerStates = [];
			foreach ($this->readerStates as $item) {
				$data->readerStates[] = $item->jsonSerialize();
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ReportGetStatusChangeResultRequestBuilder
	 */
	public static function builder(): ReportGetStatusChangeResultRequestBuilder
	{
		return new ReportGetStatusChangeResultRequestBuilder();
	}
}
