<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

/**
 * Request for SmartCardEmulation.reportBeginTransactionResult command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReportBeginTransactionResultRequest implements \JsonSerializable
{
	/** @var string */
	public $requestId;

	/** @var int */
	public $handle;


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
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ReportBeginTransactionResultRequestBuilder
	 */
	public static function builder(): ReportBeginTransactionResultRequestBuilder
	{
		return new ReportBeginTransactionResultRequestBuilder();
	}
}
