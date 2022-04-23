<?php

namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Request for Runtime.getExceptionDetails command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetExceptionDetailsRequest implements \JsonSerializable
{
	/**
	 * The error object for which to resolve the exception details.
	 *
	 * @var string
	 */
	public $errorObjectId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->errorObjectId)) {
			$instance->errorObjectId = (string)$data->errorObjectId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->errorObjectId !== null) {
			$data->errorObjectId = $this->errorObjectId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetExceptionDetailsRequestBuilder
	 */
	public static function builder(): GetExceptionDetailsRequestBuilder
	{
		return new GetExceptionDetailsRequestBuilder();
	}
}
