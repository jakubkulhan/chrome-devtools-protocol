<?php

namespace ChromeDevtoolsProtocol\Model\SmartCardEmulation;

/**
 * Request for SmartCardEmulation.reportError command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ReportErrorRequest implements \JsonSerializable
{
	/** @var string */
	public $requestId;

	/** @var string */
	public $resultCode;


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
		if (isset($data->resultCode)) {
			$instance->resultCode = (string)$data->resultCode;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		if ($this->resultCode !== null) {
			$data->resultCode = $this->resultCode;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return ReportErrorRequestBuilder
	 */
	public static function builder(): ReportErrorRequestBuilder
	{
		return new ReportErrorRequestBuilder();
	}
}
