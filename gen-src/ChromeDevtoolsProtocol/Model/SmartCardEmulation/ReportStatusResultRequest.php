<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

/**
 * Request for SmartCardEmulation.reportStatusResult command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReportStatusResultRequest implements \JsonSerializable
{
	/** @var string */
	public $requestId;

	/** @var string */
	public $readerName;

	/** @var string */
	public $state;

	/** @var string */
	public $atr;

	/** @var string */
	public $protocol;


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
		if (isset($data->readerName)) {
			$instance->readerName = (string)$data->readerName;
		}
		if (isset($data->state)) {
			$instance->state = (string)$data->state;
		}
		if (isset($data->atr)) {
			$instance->atr = (string)$data->atr;
		}
		if (isset($data->protocol)) {
			$instance->protocol = (string)$data->protocol;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->readerName !== null) {
			$data->readerName = $this->readerName;
		}
		if ($this->state !== null) {
			$data->state = $this->state;
		}
		if ($this->atr !== null) {
			$data->atr = $this->atr;
		}
		if ($this->protocol !== null) {
			$data->protocol = $this->protocol;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ReportStatusResultRequestBuilder
	 */
	public static function builder(): ReportStatusResultRequestBuilder
	{
		return new ReportStatusResultRequestBuilder();
	}
}
