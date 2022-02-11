<?php

namespace ChromeDevtoolsProtocol\Model\Fetch;

/**
 * Request for Fetch.getResponseBody command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetResponseBodyRequest implements \JsonSerializable
{
	/**
	 * Identifier for the intercepted request to get body for.
	 *
	 * @var string
	 */
	public $requestId;


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
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->requestId !== null) {
			$data->requestId = $this->requestId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetResponseBodyRequestBuilder
	 */
	public static function builder(): GetResponseBodyRequestBuilder
	{
		return new GetResponseBodyRequestBuilder();
	}
}
